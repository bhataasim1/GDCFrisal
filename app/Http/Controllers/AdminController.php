<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests\GalleryImageRequest;
use App\Http\Requests\NoticeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Notice;
use App\Models\GalleryImages;
use App\Models\Grievance;

// use App\Models\Admin;

class AdminController extends Controller
{
    public function indexPage()
    {
        return view('Admin.adminLogin');
    }

    public function adminLogin(Request $request)
    {
        // Use Laravel's built-in auth middleware to handle authentication
        if (
            Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')]) ||
            Auth::attempt(['email' => $request->input('username'), 'password' => $request->input('password')])
        ) {
            return redirect('admin/dashboard');
        }

        return redirect('admin/login')->with('status', 'Invalid username or password');
    }

    public function adminDashboard()
    {
        $admin = Auth::user();

        if ($admin) {
            return view('Admin.adminDashboard', compact('admin'));
        }

        return redirect('admin/login')->with('status', 'Unauthorized access');
    }

    public function adminLogout()
    {
        // Use Laravel's built-in auth middleware to handle logout
        Auth::logout();
        return redirect('admin/login');
    }

    // ---------------------------- Notice Section Here ---------------------------------------------

    public function noticePage()
    {
        return view('Admin.pages.postNotice');
    }

    public function viewAllNotices()
    {
        // $allNotifications = Notice::orderBy('updated_at', 'desc')->take(100)->get();
        $allNotifications = Notice::latest()->take(100)->get();

        // Calculate whether a notice is new or not
        $currentDate = Carbon::now();
        foreach ($allNotifications as $notice) {
            $notice->isNew = $notice->updated_at->greaterThanOrEqualTo($currentDate->subDays(7)); // Set 7 days as the threshold for "New"
        }

        return view('Admin.pages.Notice.allNotices', compact('allNotifications'));
    }

    public function noticePost(NoticeRequest $request)
    {
        $file = $request->file('notice_file');
        $fileName = Str::slug($request->input('notice_title')) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads/notice', $fileName);

        try {
            Notice::create([
                'notice_title' => $request->input('notice_title'),
                'notice_date' => $request->input('notice_date'),
                'notice_file' => $filePath,
            ]);

            return redirect()->route('admin.noticePage')->with('status', 'Notice created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.noticePage')->with('status', 'Error creating notice.');
        }
    }

    public function show($filename)
    {
        $filePath = Storage::disk('local')->path('uploads/notice/' . $filename);

        if (Storage::disk('local')->exists('uploads/notice/' . $filename)) {
            $mimeType = Storage::disk('local')->mimeType('uploads/notice/' . $filename);
            // ob_end_clean();
            return response()->file($filePath, ['Content-Type' => $mimeType]);
        } else {
            abort(404);
        }
    }

    public function editNotice($id)
    {
        $notice = Notice::findOrFail($id);
        return view('Admin.pages.Notice.editNotice', compact('notice'));
    }

    public function deleteNotice($id)
    {
        try {
            $notice = Notice::findOrFail($id);

            $this->deleteAssociatedFile($notice);

            $notice->delete();

            return redirect()->route('admin.allNotices')->with('status', 'Notice deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.allNotices')->with('status', 'Error deleting notice. Please try again.');
        }
    }

    public function updateNotice(Request $request, $id)
    {
        try {
            $request->validate([
                'notice_title' => 'nullable|string|max:255',
                'notice_date' => 'nullable|date',
                'notice_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
            ]);

            $notice = Notice::findOrFail($id);

            // Check if a new file is uploaded
            if ($request->hasFile('notice_file')) {
                // Delete old file first
                $this->deleteAssociatedFile($notice);

                // Update file with new title
                $this->handleFileUpdate($notice, $request->file('notice_file'));
            }

            if ($request->filled('notice_title')) {
                $notice->notice_title = $request->input('notice_title');
            }

            if ($request->filled('notice_date')) {
                $notice->notice_date = $request->input('notice_date');
            }

            // Save the changes
            $notice->save();

            return redirect()->route('admin.allNotices')->with('status', 'Notice updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.allNotices')->with('status', 'Error updating notice. Please try again.');
        }
    }


    private function handleFileUpdate($notice, $file)
    {
        if (!empty($notice->notice_file)) {
            // Delete old file
            Storage::delete($notice->notice_file);
        }

        // Generate new file name based on notice title
        $fileName = Str::slug($notice->notice_title) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads/notice', $fileName);

        $notice->notice_file = $filePath;
    }

    private function updateFileNameWithNewTitle($notice)
    {
        $newFileName = Str::slug($notice->notice_title) . '.' . pathinfo($notice->notice_file, PATHINFO_EXTENSION);
        $newFilePath = str_replace(basename($notice->notice_file), $newFileName, $notice->notice_file);

        Storage::move($notice->notice_file, $newFilePath);

        $notice->notice_file = $newFilePath;
    }

    private function deleteAssociatedFile($notice)
    {
        if (!empty($notice->notice_file)) {
            Storage::delete($notice->notice_file);
        }
    }

    // ---------------------------- Gallery Section Here ---------------------------------------------

    public function galleryPage()
    {
        return view('Admin.pages.postGalleryImages');
    }

    public function postGalleryImage(GalleryImageRequest $request)
    {

        $file = $request->file('image_file');
        $fileName = Str::slug($request->input('image_title')) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads/gallery', $fileName);

        try {
            GalleryImages::create([
                'image_title' => $request->input('image_title'),
                'image_file' => $filePath,
            ]);

            return redirect()->route('admin.galleryPage')->with('status', 'Image uploaded successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.galleryPage')->with('status', 'Error uploading image.');
        }
    }

    public function showImage($imageName)
    {
        $filePath = Storage::disk('local')->path('uploads/gallery/' . $imageName);

        if (Storage::disk('local')->exists('uploads/gallery/' . $imageName)) {
            $mimeType = Storage::disk('local')->mimeType('uploads/gallery/' . $imageName);
            // ob_end_clean();
            return response()->file($filePath, ['Content-Type' => $mimeType]);
        } else {
            abort(404);
        }
    }

    public function grievancePage(Request $request)
    {
        $validatedData = $request->validate([
            'search' => 'nullable | string | max:50'
        ]);

        $search = '%' . ($validatedData['search'] ?? '') . '%';

        $perPage = 10;

        $grievances = Grievance::where(function ($query) use ($search) {
            $query->where('name', 'LIKE', $search)
                ->orwhere('email', 'LIKE', $search)
                ->orwhere('phone', 'LIKE', $search)
                ->orwhere('subject', 'LIKE', $search);
        })->paginate($perPage)->appends(['search' => $search]);

        return view('Admin.pages.viewGrievances', compact('grievances', 'search'));
    }

    //pending to be implemented
    public function AdmitNewStudentPage()
    {
        return view('Admin.pages.newStudent');
    }
}
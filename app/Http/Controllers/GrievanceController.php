<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrievanceRequest;
use App\Models\Grievance;

class GrievanceController extends Controller
{
    public function grievancePage()
    {
        $totalGrievances = Grievance::count();
        return view('pages.grievance', compact('totalGrievances'));
    }

    public function createGrievance(GrievanceRequest $request)
    {
        Grievance::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('status', 'Your grievance has been submitted successfully.');
    }
}

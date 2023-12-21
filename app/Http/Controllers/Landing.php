<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Notice;

class Landing extends Controller
{
    public function index()
    {
        $notices = Notice::orderBy('updated_at', 'desc')->take(10)->get();

        // Calculate whether a notice is new or not
        $currentDate = Carbon::now();
        foreach ($notices as $notice) {
            $notice->isNew = $notice->updated_at->greaterThanOrEqualTo($currentDate->subDays(7)); // Set 7 days as the threshold for "New"
        }

        return view('index', compact('notices'));
    }

    public function getAllNotices() {
        $allNotifications = Notice::orderBy('updated_at', 'desc')->take(100)->get();

        // Calculate whether a notice is new or not
        $currentDate = Carbon::now();
        foreach ($allNotifications as $notice) {
            $notice->isNew = $notice->updated_at->greaterThanOrEqualTo($currentDate->subDays(7)); // Set 7 days as the threshold for "New"
        }

        return view('pages.allNotices', compact('allNotifications'));
    }

    public function aboutUs()
    {
        return view('pages.aboutUs');
    }

    public function ourTeam()
    {
        return view('pages.ourTeam');
    }
}

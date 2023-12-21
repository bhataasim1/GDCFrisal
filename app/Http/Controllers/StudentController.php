<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function indexPage()
    {
        return view('Student.studentLogin'); //Student Folder then studentLogin.blade.php
    }
}

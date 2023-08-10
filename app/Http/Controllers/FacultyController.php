<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function facultyDashboard(){
        return view('faculty.faculty_dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function facultyController(){
        return view('faculty.faculty_dashboard');
    }
}

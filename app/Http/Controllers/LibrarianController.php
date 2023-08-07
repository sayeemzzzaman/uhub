<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    public function librarianDashboard(){
        return view('librarian.librarian_dashboard');
    }
}

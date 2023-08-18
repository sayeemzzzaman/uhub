<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class StudentController extends Controller
{
    public function studentDashboard(){
        return view('student.student_index');
    }

    public function showLibrary(){
        return view('student.student_library_show', [
            'books' => Book::latest()->filter(request(['search']))->paginate(6)
        ]);

    }


    public function studentLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

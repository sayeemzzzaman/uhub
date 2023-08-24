<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Club;
use App\Models\User;
use App\Models\Contact;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class StudentController extends Controller
{
    public function studentDashboard(){
        $studentId = Auth::user()->uiuid;
        return view('student.student_index', [
            'requisitions' => Requisition::where('studentID', $studentId)
                ->latest()
                ->get()
        ]);

    }

    public function showLibrary(){
        return view('student.student_library_show', [
            'books' => Book::latest()->filter(request(['search']))->paginate(10)
        ]);

    }
    public function showFaculty(){

        return view('student.student_faculty_show', [
            'contacts' => Contact::where('designation', 'Faculty')->latest()->filter(request(['search']))->paginate(10),

        ]);

    }
    public function showStaffOther(){

        return view('student.student_stuff_show', [
            'contacts' => Contact::whereIn('designation', ['Lab attendent', 'TA'])->latest()->filter(request(['search']))->paginate(10),

        ]);

    }
    public function showClub(){

        return view('student.student_club_show', [
            'clubs' => Club::latest()->filter(request(['search']))->paginate(10),

        ]);

    }

    public function quickRequeRequisition(Request $request)
    {


        $id = Auth::user()->id;
        $profileData = User::find($id);

        Requisition::insert([
            'requisitionsId' => rand(),
            'bookID' => $request->bookID,
            'studentID' => $profileData->uiuid,
            'bookName' => $request->bookName,
        ]);

        $notification = array(
            'message' => 'Requisition added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function studentLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Counselling;
use Illuminate\Http\Request;

class CounsellingController extends Controller
{
    public function showcounsellings()
    {
        $counsellings = Counselling::latest()->get();
        return view('backend.counselling.showCounselling', compact('counsellings'));
    }
    public function addcounselling()
    {
        return view('backend.counselling.addCounselling');
    }

    public function storecounselling(Request $request)
    {

        $request->validate([
            'studentId' => 'required',
            'day' => 'required',
            'time' => 'required',
            'faculty' => 'required',
            'status' => 'required'
        ]);


        Counselling::insert([
            'studentId' => $request->studentId,
            'day' => $request->day,
            'time' => $request->time,
            'faculty' => $request->faculty,
            'status' => $request->status,
        ]);



        $notification = array(
            'message' => 'Counselling added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.counselling.show')->with($notification);
    }

    public function editcounselling($id)
    {
        $counselling = Counselling::findOrFail($id);
        return view('backend.counselling.editCounselling', compact('counselling'));
    }



    public function quickUpdatecounselling(Request $request)
    {
        $rid = $request->id;

        $request->validate([
            'status' => 'required'
        ]);

        Counselling::findOrFail($rid)->update([
            'status' => $request->status,
        ]);

        $notification = array(
            'message' => 'counselling status Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.admin_dashboard')->with($notification);
    }


    public function updatecounselling(Request $request)
    {
        $cid = $request->id;

        $request->validate([
            'studentId' => 'required',
            'day' => 'required',
            'time' => 'required',
            'faculty' => 'required',
            'status' => 'required'
        ]);

        Counselling::findOrFail($cid)->update([
            'studentId' => $request->studentId,
            'day' => $request->day,
            'time' => $request->time,
            'faculty' => $request->faculty,
            'status' => $request->status,
        ]);

        $notification = array(
            'message' => 'Counselling Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.counselling.show')->with($notification);
    }
    public function deletecounselling($id)
    {
        Counselling::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Counselling Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}

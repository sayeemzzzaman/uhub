<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequisitionController extends Controller
{
    public function showRequisitions()
    {
        $requisitions = Requisition::latest()->get();
        return view('backend.requisition.showRequisition', compact('requisitions'));
    }
    public function addRequisition()
    {
        return view('backend.requisition.addRequisition');
    }

    public function storeRequisition(Request $request)
    {

        $request->validate([
            'requisitionsId' => 'required',
            'bookID' => 'required',
            'studentID' => 'required',
            'bookName' => 'required',
            'status' => 'required'
        ]);

        Requisition::insert([
            'requisitionsId' => $request->requisitionsId,
            'bookID' => $request->bookID,
            'studentID' => $request->studentID,
            'bookName' => $request->bookName,
            'status' => $request->status,
        ]);



        $notification = array(
            'message' => 'Requisition added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.requisition.show')->with($notification);
    }

    public function editRequisition($id)
    {
        $requisition = Requisition::findOrFail($id);
        return view('backend.requisition.editRequisition', compact('requisition'));
    }

    

    public function quickUpdateRequisition(Request $request)
    {
        $rid = $request->id;

        $request->validate([
            'status' => 'required'
        ]);

        Requisition::findOrFail($rid)->update([
            'status' => $request->status,
        ]);

        $notification = array(
            'message' => 'Requisition status Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.admin_dashboard')->with($notification);
    }


    public function updateRequisition(Request $request)
    {
        $rid = $request->id;

        $request->validate([
            'requisitionsId' => 'required',
            'bookID' => 'required',
            'studentID' => 'required',
            'bookName' => 'required',
            'status' => 'required'
        ]);

        Requisition::findOrFail($rid)->update([
            'requisitionsId' => $request->requisitionsId,
            'bookID' => $request->bookID,
            'studentID' => $request->studentID,
            'bookName' => $request->bookName,
            'status' => $request->status,
        ]);

        $notification = array(
            'message' => 'Requisition Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.requisition.show')->with($notification);
    }
    public function deleteRequisition($id)
    {
        Requisition::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Requisition Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}

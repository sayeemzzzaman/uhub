<?php

namespace App\Http\Controllers;

use App\Models\Requisition;
use Illuminate\Http\Request;

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
            'name' => 'required',
            'auther' => 'required',
            'description' => 'required',
            'shelf' => 'required',

        ]);

        Requisition::insert([
            'name' => $request->name,
            'auther' => $request->auther,
            'description' => $request->description,
            'shelf' => $request->shelf,
        ]);

        $notification = array(
            'message' => 'Requisition added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.requisition.showRequisition')->with($notification);
    }
    public function editRequisition($id)
    {
        $requisition = Requisition::findOrFail($id);
        return view('backend.requisition.editRequisition', compact('requisition'));
    }
    public function updateRequisition(Request $request)
    {
        $rid = $request->id;

        Requisition::findOrFail($rid)->update([
            'name' => $request->name,
            'auther' => $request->auther,
            'description' => $request->description,
            'shelf' => $request->shelf,
        ]);

        $notification = array(
            'message' => 'Requisition Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.requisition.showRequisition')->with($notification);
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

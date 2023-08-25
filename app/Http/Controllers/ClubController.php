<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function clubs(){

        return view('backend.club.showClub', [
            'clubs' => Club::latest()->get()
        ]);
    }
    public function addclub(){
        return view('backend.club.addClub');
    }
    public function storeclub(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        if ($request->file('clubImageUpload')) {
            $file = $request->file('clubImageUpload');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/club_images'), $fileName);
        }

        Club::insert([
            'name' => $request->name,
            'description' => $request->description,
            'formLink' => $request->formLink,
            'logo' => $fileName
        ]);

        $notification = array(
            'message' => 'club added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.club.showclubs')->with($notification);
    }
    public function editclub($id){
        return view('backend.club.editClub',[
            'club' => Club::findOrFail($id)
        ]);

    }
    public function updateclub(Request $request){
        $cid = $request->id;

        if ($request->file('clubImageUpload')) {
            $file = $request->file('clubImageUpload');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/club_images'), $fileName);
        }

        Club::findOrFail($cid)->update([
            'name' => $request->name,
            'formLink' => $request->formLink,
            'description' => $request->description,
            'logo' => $fileName
        ]);

        $notification = array(
            'message' => 'club Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.club.showclubs')->with($notification);
    }
    public function deleteclub($id){
        Club::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Club Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

}

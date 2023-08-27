<?php

namespace App\Http\Controllers;


use App\Models\Message;
use Illuminate\Http\Request;

class MessegeController extends Controller
{
    public function showmessages()
    {

        return view('backend.message.showmessage', [
            'messages' => Message::latest()->get()
        ]);
    }
    public function addmessage()
    {
        return view('backend.message.addmessage');
    }
    public function storemessage(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'msg' => 'required',

        ]);

        Message::insert([
            'subject' => $request->subject,
            'message' => $request->msg,
        ]);

        $notification = array(
            'message' => 'message added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.message.showmesseges')->with($notification);
    }
    public function editmessage($id)
    {
        return view('backend.message.editmessage', [
            'message' => Message::findOrFail($id)
        ]);
    }
    public function updatemessage(Request $request)
    {
        $cid = $request->id;

        Message::findOrFail($cid)->update([
            'subject' => $request->subject,
            'message' => $request->msg,
        ]);

        $notification = array(
            'message' => 'message Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.message.showmesseges')->with($notification);
    }
    public function deletemessage($id)
    {
        Message::findOrFail($id)->delete();

        $notification = array(
            'message' => 'message Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}

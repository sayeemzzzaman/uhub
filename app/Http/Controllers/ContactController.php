<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        // $contacts = Contact::latest()->get();
        $contacts = Contact::where('designation', 'Faculty')->latest()->get();
        return view('backend.Contact.showContact', compact('contacts'));
    }
    public function showContactTA()
    {
        // $contacts = Contact::latest()->get();
        $contacts = Contact::where('designation', 'TA')->latest()->get();
        return view('backend.Contact.showContactTA', compact('contacts'));
    }
    public function showContactLA()
    {
        // $contacts = Contact::latest()->get();
        $contacts = Contact::where('designation', 'Lab attendent')->latest()->get();
        return view('backend.Contact.showContactLA', compact('contacts'));
    }
    public function addContact()
    {
        return view('backend.Contact.addContact');
    }
    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'email' => 'required',

        ]);

        if ($request->file('contactImageUpload')) {
            $file = $request->file('contactImageUpload');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/contact_images'), $fileName);

            Contact::insert([
                'name' => $request->name,
                'designation' => $request->designation,
                'email' => $request->email,
                'description' => $request->description,
                'image' => $fileName
            ]);
        } else {
            Contact::insert([
                'name' => $request->name,
                'designation' => $request->designation,
                'email' => $request->email,
                'description' => $request->description
            ]);
        }


        $notification = array(
            'message' => 'Contact added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.contact.show')->with($notification);
    }
    public function editContact($id)
    {
        $contacts = Contact::findOrFail($id);
        return view('backend.contact.editContact', compact('contacts'));
    }
    public function editCounselingHour($id)
    {
        $contacts = Contact::findOrFail($id);
        $string = $contacts->counseling_hour;
        $counseling = explode(",", $string);


        return view('backend.contact.editCounselingHour', compact('contacts', 'counseling'));
    }

    public function updateCounselingHour(Request $request)
    {
        $cid = $request->id;

        $contact = Contact::findOrFail($cid);

        $counseling = $contact->counseling_hour;
        $newCoun = $counseling . ',' . $request->cday . '_' . $request->ctime;

        $contact->update([
            'counseling_hour' => $newCoun
        ]);

        $notification = array(
            'message' => 'Counseling Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.contact.show')->with($notification);
    }
    public function updateContact(Request $request)
    {
        $cid = $request->id;

        if ($request->file('contactImageUpload')) {
            $file = $request->file('contactImageUpload');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/contact_images'), $fileName);
        }

        Contact::findOrFail($cid)->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'email' => $request->email,
            'description' => $request->description,
            'image' => $fileName,
        ]);

        $notification = array(
            'message' => 'Contact Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.contact.show')->with($notification);
    }
    public function deleteContact($id)
    {
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        $contacts = Contact::latest()->get();
        return view('contact.showContact', compact('contacts'));
    }
    public function addBook()
    {
        return view('contact.addBook');
    }
    public function storeBook(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'auther' => 'required',
            'description' => 'required',
            'shelf' => 'required',

        ]);

        if ($request->file('bookImageUpload')) {
            $file = $request->file('bookImageUpload');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/book_images'), $fileName);
        }

        Contact::insert([
            'name' => $request->name,
            'auther' => $request->auther,
            'description' => $request->description,
            'shelf' => $request->shelf,
            'photo' => $fileName
        ]);

        $notification = array(
            'message' => 'Book added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.book.showBooks')->with($notification);
    }
    public function editBook($id)
    {
        $book = Contact::findOrFail($id);
        return view('backend.book.editBook', compact('book'));
    }
    public function updateBook(Request $request)
    {
        $bid = $request->id;

        if ($request->file('bookImageUpload')) {
            $file = $request->file('bookImageUpload');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/book_images'), $fileName);
        }

        Contact::findOrFail($bid)->update([
            'name' => $request->name,
            'auther' => $request->auther,
            'description' => $request->description,
            'shelf' => $request->shelf,
            'photo' => $fileName
        ]);

        $notification = array(
            'message' => 'Book Updated successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.book.showBooks')->with($notification);
    }
    public function deleteBook($id)
    {
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Book Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}

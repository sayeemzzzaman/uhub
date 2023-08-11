<?php

namespace App\Http\Controllers\backend;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function showBooks()
    {
        $books = Book::latest()->get();
        return view('backend.book.showBooks', compact('books'));
    }
    public function addBook()
    {
        return view('backend.book.addBook');
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

        Book::insert([
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
        $book = Book::findOrFail($id);
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

        Book::findOrFail($bid)->update([
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
        // Book::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Book Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}

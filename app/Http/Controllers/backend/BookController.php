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
}

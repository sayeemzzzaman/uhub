<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('library-books');
});
Route::get('/sign-in', function () {
    return view('sign-in');
});
Route::get('/club-archive', function () {
    return view('club-archive');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Search Books
Route::get('/books/searchBook', [BookController::class, 'searchBook'])->middleware('auth');

// requisition Books
Route::post('/books/requisitionBook', [UserController::class, 'requisitionBook'])->middleware('auth');

// Fine Calculation
Route::post('/books/requisitionBook/fines', [UserController::class, 'fines'])->middleware('auth');

require __DIR__.'/auth.php';

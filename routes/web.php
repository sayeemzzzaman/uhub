<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\backend\BookController;

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
    return view('welcome');
});

/// Admin Middleware Links

Route::get('/dashboard', function () {
    return view('student.student_index');
})->middleware(['auth', 'verified'])->name('dashboard');

///Student Group Controller Links

Route::controller(StudentController::class)->group(function(){

    Route::get('/student/logout', 'studentLogout')->name('student.logout');

});


/// Admin Middleware Links

Route::middleware(['auth', 'role:admin'])->group(function () {
   Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.admin_dashboard');
   Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
   Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
   Route::post('/admin/profile/store', [AdminController::class, 'adminProfileStore'])->name('admin.profile.store');
   Route::get('/admin/change/password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');

});


/// Admin Group Controller Links

 Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(BookController::class)->group(function(){

        Route::get('/admin/book/show', 'showBooks')->name('admin.book.showBooks');
    });
 });



 require __DIR__ . '/auth.php';












 // breez:: Auth Codes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 /// Codes:: backup


// // Search Books
// Route::get('/books/searchBook', [BookController::class, 'searchBook'])->middleware('auth');

// // requisition Books
// Route::post('/books/requisitionBook', [UserController::class, 'requisitionBook'])->middleware('auth');

// // Fine Calculation
// Route::post('/books/requisitionBook/fines', [UserController::class, 'fines'])->middleware('auth');



// code::Dashboards
// Route::get('/student/dashboard', [StudentController::class, 'studentDashboard'])->name('student.student_dashboard');


// Route::middleware(['auth', 'role:faculty'])->group(function () {
//     Route::get('/faculty/dashboard', [FacultyController::class, 'facultyDashboard'])->name('faculty.faculty_dashboard');

//  });

//  Route::middleware(['auth', 'role:librarian'])->group(function () {
//     Route::get('/librarian/dashboard', [LibrarianController::class, 'librarianDashboard'])->name('librarian.librarian_dashboard');

//  });


// Route::get('/library', function () {
//     return view('library');
// });

// Route::get('/faculty-member', function () {
//     return view('faculty/faculty-member');
// });
// Route::get('/club-archive', function () {
//     return view('club-archive');
// });

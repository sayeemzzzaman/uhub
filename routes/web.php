<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessegeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\CounsellingController;
use App\Http\Controllers\RequisitionController;
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


// Student :: Routs
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::controller(StudentController::class)->group(function () {
        Route::get('/student/dashboard', 'studentDashboard')->middleware(['auth', 'verified'])->name('student.dashboard');
        Route::get('/student/library/show', 'showLibrary')->name('student.library.show');
        Route::get('/student/staff/faculty', 'showFaculty')->name('student.staff.faculty');
        Route::get('/student/staff/staffOther', 'showStaffOther')->name('student.staff.staffOther');
        Route::get('/student/club/show', 'showClub')->name('student.club.show');
        Route::post('/student/library/quickReque', 'quickRequeRequisition')->name('student.library.quickReque');
        Route::post('/student/counselling/quickRequeCounselling', 'quickRequeCounselling')->name('student.counselling.quickRequeCounselling');
        Route::get('/student/logout', 'studentLogout')->name('student.logout');
    });
});


// Admin :: routs

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.admin_dashboard');
    Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'adminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'adminUpdatePassword'])->name('admin.update.password');
});


// Librarian :: routs

Route::middleware(['auth', 'role:librarian'])->group(function () {
    Route::get('/librarian/dashboard', [LibrarianController::class, 'librarianDashboard'])->name('librarian.librarian_dashboard');
    Route::get('/librarian/logout', [LibrarianController::class, 'librarianLogout'])->name('librarian.logout');
    Route::get('/librarian/profile', [LibrarianController::class, 'librarianProfile'])->name('librarian.profile');
    Route::post('/librarian/profile/store', [LibrarianController::class, 'librarianProfileStore'])->name('librarian.profile.store');
    Route::get('/librarian/change/password', [LibrarianController::class, 'librarianChangePassword'])->name('librarian.change.password');
    Route::post('/librarian/update/password', [LibrarianController::class, 'librarianUpdatePassword'])->name('librarian.update.password');
});

/// Librarian :: Book

Route::middleware(['auth', 'role:librarian'])->group(function () {

    Route::controller(BookController::class)->group(function () {

        Route::get('/admin/book/show', 'showBooks')->name('admin.book.showBooks');
        Route::get('/admin/book/add', 'addBook')->name('admin.book.add');
        Route::post('/admin/book/store', 'storeBook')->name('admin.book.store');
        Route::get('/admin/book/edit/{id}', 'editBook')->name('admin.book.edit');
        Route::post('/admin/book/update', 'updateBook')->name('admin.book.update');
        Route::get('/admin/book/delete/{id}', 'deleteBook')->name('admin.book.delete');
    });
});

/// Admin Group Controller Links :: requisition

Route::middleware(['auth', 'role:librarian'])->group(function () {

    Route::controller(RequisitionController::class)->group(function () {

        Route::get('/admin/requisition/show', 'showRequisitions')->name('admin.requisition.show');
        Route::get('/admin/requisition/add', 'addRequisition')->name('admin.requisition.add');
        Route::post('/admin/requisition/store', 'storeRequisition')->name('admin.requisition.store');
        Route::get('/admin/requisition/edit/{id}', 'editRequisition')->name('admin.requisition.edit');
        Route::post('/admin/requisition/update', 'updateRequisition')->name('admin.requisition.update');
        Route::get('/admin/requisition/delete/{id}', 'deleteRequisition')->name('admin.requisition.delete');

        Route::post('/admin/requisition/quickUpdate', 'quickUpdateRequisition')->name('admin.requisition.quickUpdate');
    });
});

// Admin :: Counselling

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(CounsellingController::class)->group(function () {
        Route::get('/admin/counselling/show', 'showcounsellings')->name('admin.counselling.show');
        Route::get('/admin/counselling/add', 'addcounselling')->name('admin.counselling.add');
        Route::post('/admin/counselling/store', 'storecounselling')->name('admin.counselling.store');
        Route::get('/admin/counselling/edit/{id}', 'editcounselling')->name('admin.counselling.edit');
        Route::post('/admin/counselling/update', 'updatecounselling')->name('admin.counselling.update');
        Route::get('/admin/counselling/delete/{id}', 'deletecounselling')->name('admin.counselling.delete');
        Route::post('/admin/counselling/quickUpdate', 'quickUpdatecounselling')->name('admin.counselling.quickUpdate');
    });
});

/// Admin :: Contact

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(ContactController::class)->group(function () {
        Route::get('/admin/contact/show', 'showContact')->name('admin.contact.show');
        Route::get('/admin/contact/showTA', 'showContactTA')->name('admin.contact.showTA');
        Route::get('/admin/contact/showLA', 'showContactLA')->name('admin.contact.showLA');
        Route::get('/admin/contact/add', 'addContact')->name('admin.contact.add');
        Route::post('/admin/contact/store', 'storeContact')->name('admin.contact.store');
        Route::get('/admin/contact/edit/{id}', 'editContact')->name('admin.contact.edit');
        Route::get('/admin/contact/edit/{id}/CounselingHour', 'editCounselingHour')->name('admin.contact.counselingHour');
        Route::post('/admin/contact/update', 'updateContact')->name('admin.contact.update');
        Route::post('/admin/contact/update/counselingUpdate', 'updateCounselingHour')->name('admin.contact.updateCounselingHour');
        Route::get('/admin/contact/delete/{id}', 'deleteContact')->name('admin.contact.delete');
    });
});

/// Admin :: Club

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(ClubController::class)->group(function () {
        Route::get('/admin/club/show', 'showclubs')->name('admin.club.showclubs');
        Route::get('/admin/club/add', 'addclub')->name('admin.club.add');
        Route::post('/admin/club/store', 'storeclub')->name('admin.club.store');
        Route::get('/admin/club/edit/{id}', 'editclub')->name('admin.club.edit');
        Route::post('/admin/club/update', 'updateclub')->name('admin.club.update');
        Route::get('/admin/club/delete/{id}', 'deleteclub')->name('admin.club.delete');
    });
});


/// Admin::Message

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(MessegeController::class)->group(function () {
        Route::get('/admin/message/show', 'showmessages')->name('admin.message.showmesseges');
        Route::get('/admin/message/add', 'addmessage')->name('admin.message.add');
        Route::post('/admin/message/store', 'storemessage')->name('admin.message.store');
        Route::get('/admin/message/edit/{id}', 'editmessage')->name('admin.message.edit');
        Route::post('/admin/message/update', 'updatemessage')->name('admin.message.update');
        Route::get('/admin/message/delete/{id}', 'deletemessage')->name('admin.message.delete');
    });
});


// Student :: Scholarly Work

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::controller(ProjectController::class)->group(function () {
        Route::get('/student/projects/index', 'indexProjects')->name('student.Projects.index');
        Route::get('/student/projects/show/{id}', 'showProjects')->name('student.Projects.show');
        Route::get('/student/projects/add', 'addProjects')->name('student.Projects.add');
        Route::post('/student/projects/store', 'storeProjects')->name('student.Projects.store');
        Route::get('/student/projects/edit/{id}', 'editProjects')->name('student.Projects.edit');
        Route::post('/student/projects/update', 'updateProjects')->name('student.Projects.update');
        Route::get('/student/projects/delete/{id}', 'deleteProjects')->name('student.Projects.delete');
        Route::post('/student/projects/show/message', 'updateComment')->name('student.Projects.comment.store');
        Route::post('/student/projects/file/add', 'addFile')->name('student.Projects.file.add');
        Route::get('/student/projects/file/delete/{id}', 'deleteFile')->name('student.Projects.file.delete');
    });
});

// Student :: paper

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::controller(PaperController::class)->group(function () {
        Route::get('/student/paper/index', 'indexPaper')->name('student.paper.index');
        Route::get('/student/paper/show/{id}', 'showPaper')->name('student.paper.show');
        Route::get('/student/paper/add', 'addPaper')->name('student.paper.add');
        Route::post('/student/paper/store', 'storePaper')->name('student.paper.store');
        Route::get('/student/paper/edit/{id}', 'editPaper')->name('student.paper.edit');
        Route::post('/student/paper/update', 'updatePaper')->name('student.paper.update');
        Route::get('/student/paper/delete/{id}', 'deletePaper')->name('student.paper.delete');
        Route::post('/student/paper/comment/update', 'updateComment')->name('student.paper.comment.update');
    });
});


// breez:: Auth Codes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

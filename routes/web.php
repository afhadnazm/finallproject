<?php

use App\Http\Controllers\ProfileController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\LoginController;



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
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/universitycounsel', function () {
    return view('universitycounsel');
});
Route::get('/presidentoffice', function () {
    return view('presidentoffice');
});
Route::get('/library', function () {
    return view('library');
});
Route::get('/relevantwebs', function () {
    return view('relevantwebs');
});
Route::get('/acadimicrelations', function () {
    return view('acadimicrelations');
});
Route::get('/it', function () {
    return view('it');
});
Route::get('/e-management', function () {
    return view('e-management');
});
Route::get('/acadimicprofile', function () {
    return view('acadimicprofile');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/documents', function () {
    return view('documents');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/vission', function () {
    return view('vission');
});
Route::get('/logo', function () {
    return view('logo');
});
Route::get('/grades', function () {
    return view('grade');
});
Route::get('/teacher_login', function () {
    return view('teacher.login');
});
Route::get('/student_login', function () {
    return view('student.login');
})->name('student.login');
Route::get('/student_register', function () {
    return view('student.registar');
})->name('student.registar');
Route::get('/admin_login', function () {
    return view('admin.login');
})->name('admin.login');

route::prefix('colleges')->group(function () {
    Route::view('/colleges/dentistry', 'colleges.college of dentistry')->name('colleges.dentistry');
    Route::view('/colleges/health-sciences', 'colleges.college of health sciences')->name('colleges.health.sciences');
    Route::view('/colleges/medicine', 'colleges.college of medicine')->name('colleges.medicine');
    Route::view('/colleges/nursing', 'colleges.college of nursing')->name('colleges.nursing');
    Route::view('/colleges/pharmacy', 'colleges.college of pharmacy')->name('colleges.pharmacy');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::prefix('student')->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'dashboard'])->name('student.dashboard')->middleware("student");
    Route::post('/login/owner', [StudentDashboardController::class, 'login'])->name('login.student');
    Route::post('/logout', [StudentDashboardController::class, 'logout'])->name('logout.student')->middleware('student');
    Route::get('/login', [StudentDashboardController::class, 'index'])->name('login.from.student');
    Route::post('/register', [StudentDashboardController::class, 'register'])->name('register.student');
    Route::post('/student/register-subject', [StudentDashboardController::class, 'subject_register'])->name('student.register.subject');

});
Route::prefix('teacher')->group(function () {
    Route::get('/dashboard', [TeacherDashboardController::class, 'dashboard'])->name('teacher.dashboard')->middleware("teacher");
    Route::post('/login/owner', [TeacherDashboardController::class, 'login'])->name('login.teacher');
    Route::post('/logout', [TeacherDashboardController::class, 'logout'])->name('logout.teacher')->middleware('teacher');
    Route::get('/login', [TeacherDashboardController::class, 'index'])->name('login.from.teacher');
    Route::put('/teacher/update-grade/{student_id}', [TeacherDashboardController::class, 'updateGrade'])->name('teacher.update.grade');



});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware("admin");
    Route::post('/login/owner', [AdminDashboardController::class, 'login'])->name('login.admin');
    Route::post('/logout', [AdminDashboardController::class, 'logout'])->name('logout.admin')->middleware('teacher');
    Route::get('/login', [AdminDashboardController::class, 'index'])->name('login.from.admin');
    Route::get('/admin/students/pending', [AdminDashboardController::class, 'showPendingStudents'])->name('admin.students.pending');
    Route::post('/admin/students/{pending_student}/approve', [AdminDashboardController::class, 'approve'])->name('admin.students.approve');
    Route::post('/admin/students/{pending_student}/reject', [AdminDashboardController::class, 'reject'])->name('admin.students.reject');
    Route::post('/teacher/register-subject', [AdminDashboardController::class, 'register'])->name('teacher.register.subject');
    Route::post('/subjects', [AdminDashboardController::class, 'store_subject'])->name('admin.subjects.store');
    Route::delete('/subjects/{subject}', [AdminDashboardController::class, 'destroy_subject'])->name('admin.subjects.destroy');
    Route::put('/subjects/{subject}', [AdminDashboardController::class, 'update_subject'])
        ->name('admin.subjects.update');
});




require __DIR__ . '/auth.php';

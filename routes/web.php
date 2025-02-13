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
Route::get('/grades', function () {
    return view('grade');
});
Route::get('/teacher_login', function () {
    return view('teacher.login');
});
Route::get('/student_login', function () {
    return view('student.login');
})->name('student.login');

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
});
Route::prefix('teacher')->group(function () {
    Route::get('/dashboard', [TeacherDashboardController::class, 'dashboard'])->name('teacher.dashboard')->middleware("teacher");
    Route::post('/login/owner', [TeacherDashboardController::class, 'login'])->name('login.teacher');
    Route::post('/logout', [TeacherDashboardController::class, 'logout'])->name('logout.teacher')->middleware('teacher');
    Route::get('/login', [TeacherDashboardController::class, 'index'])->name('login.from.teacher');
    Route::put('/teacher/update-grade/{student_id}', [TeacherDashboardController::class, 'updateGrade'])->name('teacher.update.grade');

});




require __DIR__ . '/auth.php';

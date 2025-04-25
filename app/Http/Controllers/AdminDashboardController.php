<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use App\Models\Student;
use App\Models\pending_student;
use App\Models\Teacher;
use illuminate\Support\Facades\Log;
class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function dashboard()
    {
        $admin = Auth::guard('admin')->user();
        $teachers = Teacher::all();
        $pendingStudents = pending_student::where('status', 'pending')->get();
        $totalStudents = Student::count();
        $totalpensdinStudents = pending_student::count();
        return view('admin.index', compact('pendingStudents', 'totalStudents', 'admin', 'totalpensdinStudents', 'teachers'));


    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput($request->only('email'));

    }
    public function logout()
    {
        Auth::guard('Admin')->logout();
        return redirect()->route('login.from.admin');
    }


    public function approve(pending_student $pendingStudent)
    {

        // Create the student in the main table
        $student = Student::create([
            'first_name' => $pendingStudent->first_name,
            'last_name' => $pendingStudent->last_name,
            'email' => $pendingStudent->email,
            'password' => $pendingStudent->password, // Password is already hashed
            'stage_id' => $pendingStudent->stage_id,
            'department' => $pendingStudent->department,
            'student_id_path' => $pendingStudent->student_id_path,
            'enrollment_proof_path' => $pendingStudent->enrollment_proof_path,
            'email_verified_at' => now(), // Mark as verified
        ]);

        // Optionally copy verification notes if needed
        if ($pendingStudent->verification_notes) {
            $student->update(['verification_notes' => $pendingStudent->verification_notes]);
        }

        // Delete the pending student record
        $pendingStudent->delete();



        return redirect()->back()->with('success', 'Student approved successfully');
    }



    public function reject(Request $request, Student $student)
    {
        $request->validate(['reason' => 'required|string']);
        $student->update([
            'status' => 'rejected',
            'rejection_reason' => $request->reason
        ]);
        return back()->with('error', 'Student rejected.');
    }
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students,email|unique:pending_students,email',
            'password' => 'required|min:8',
            'subject_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);



        // Store in pending table
        $pendingStudent = Teacher::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'subject_title' => $request->subject_title,
            'department' => $request->department,

        ]);

        // Notify admin
        // You'll need to implement this notification
        // Notification::send($adminUsers, new PendingStudentNotification($pendingStudent));

        return redirect()->route('login.from.student');
    }
}

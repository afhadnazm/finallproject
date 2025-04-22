<?php

namespace App\Http\Controllers;

use App\Models\pending_student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pending_students;
use Illuminate\Support\Facades\Hash;

class StudentDashboardController extends Controller
{
    public function index()
    {
        return view('student.login');
    }
    public function dashboard()
    {
        $student = Auth::guard('student')->user();

        // Load the students related to the teacher
        $student->load(['teacherAssignments', 'stage']);

        // Pass teacher data to the view
        return view('student.index  ', compact('student'));
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->route('student.dashboard');
        }
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput($request->only('email'));

    }
    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('login.from.student');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students,email|unique:pending_students,email',
            'password' => 'required|min:8',
            'student_id' => 'required|file|mimes:jpeg,png,pdf|max:5120',
            'enrollment_proof' => 'required|file|mimes:jpeg,png,pdf|max:5120',
            'verification_notes' => 'nullable|string',
            'terms' => 'required|accepted',
        ]);

        // Handle file uploads
        $studentIdPath = $request->file('student_id')->store('pending/student_ids');
        $enrollmentProofPath = $request->file('enrollment_proof')->store('pending/enrollment_proofs');

        // Store in pending table
        $pendingStudent = pending_student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'stage_id' => $request->stage_id, // Make sure to add this to your form
            'department' => $request->department,
            'student_id_path' => $studentIdPath,
            'enrollment_proof_path' => $enrollmentProofPath,
            'verification_notes' => $request->verification_notes,
        ]);

        // Notify admin
        // You'll need to implement this notification
        // Notification::send($adminUsers, new PendingStudentNotification($pendingStudent));

        return redirect()->route('student.registration.success');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:students',
        'password' => ['required', 'confirmed', Password::min(8)],
        'department' => 'required|string|max:255',
        'stage_id' => 'required|exists:stages,id',
        'student_id' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        'enrollment_proof' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        'terms' => 'required|accepted',
    ]);

    // Store documents securely
    $studentIdPath = $request->file('student_id')->store('student_docs', 'private');
    $enrollmentProofPath = $request->file('enrollment_proof')->store('student_docs', 'private');

    // Create student with 'pending' status
    $student = Student::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'department' => $request->department,
        'stage_id' => $request->stage_id,
        'student_id_path' => $studentIdPath,
        'enrollment_proof_path' => $enrollmentProofPath,
        'status' => 'pending', // Awaiting admin approval
    ]);

    // Notify admin (via email or dashboard)
    Admin::first()->notify(new NewStudentRegistration($student));

    return redirect()->route('registration.pending');
    }
}

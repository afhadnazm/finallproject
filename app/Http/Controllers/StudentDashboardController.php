<?php

namespace App\Http\Controllers;

use App\Models\pending_student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subject;
use App\Models\Grade;
use Illuminate\Support\Facades\Hash;

class StudentDashboardController extends Controller
{
    public function index()
    {
        return view('student.login');
    }
    // app/Http/Controllers/StudentController.php
    public function dashboard()
    {
        $student = Auth::guard('student')->user()->load(['stage', 'semester']);

        // Get available subjects for the student's stage and semester
        $availableSubjects = Subject::where('stage_id', $student->stage_id)
            ->where('semester_id', $student->semester_id)
            ->whereDoesntHave('students', function ($query) use ($student) {
                $query->where('student_id', $student->id);
            })
            ->with('teacher')
            ->get();

        // Get registered subjects
        $registeredSubjects = $student->subjects()
            ->with('teacher')
            ->get();

        // Get grades
        $grades = Grade::where('student_id', $student->id)
            ->with('subject')
            ->get();

        return view('student.index', compact(
            'student',
            'availableSubjects',
            'registeredSubjects',
            'grades'
        ));
    }

    public function subject_register(Request $request)
    {
        $student = auth()->guard('student')->user();

        $validated = $request->validate([
            'subject_id' => 'required|exists:subjects,id'
        ]);

        // Check if already registered
        if ($student->subjects()->where('subject_id', $validated['subject_id'])->exists()) {
            return back()->with('error', 'You are already registered for this subject');
        }

        // Get the subject with semester information
        $subject = Subject::findOrFail($validated['subject_id']);

        // Create the registration record in subject_student table
        $student->subjects()->attach($validated['subject_id'], [
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Create a record in grades_students table with NULL values
        Grade::create([
            'student_id' => $student->id,
            'subject_id' => $validated['subject_id'],
            'semester_id' => $subject->semester_id,
            'midterm' => null,
            'final' => null,
            'practical' => null,
            'total' => null,
            'comments' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Subject registration submitted successfully');
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
            'Department' => 'nullable|string|max:255',
            'student_id' => 'required|file|mimes:jpeg,png,pdf|max:5120',
            'enrollment_proof' => 'required|file|mimes:jpeg,png,pdf|max:5120',
            'verification_notes' => 'nullable|string',
            'terms' => 'required|accepted',
        ]);

        // Handle file uploads
        $studentIdPath = $request->file('student_id')->store('pending/student_ids', 'public');

        $enrollmentProofPath = $request->file('enrollment_proof')->store('pending/enrollment_proofs', 'public');

        // Store in pending table
        $pendingStudent = pending_student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'department' => $request->Department,
            'student_id_path' => $studentIdPath,
            'enrollment_proof_path' => $enrollmentProofPath,
            'verification_notes' => $request->verification_notes,
        ]);

        // Notify admin
        // You'll need to implement this notification
        // Notification::send($adminUsers, new PendingStudentNotification($pendingStudent));

        return redirect()->route('login.from.student');
    }

}

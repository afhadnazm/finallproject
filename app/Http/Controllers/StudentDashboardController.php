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
    public function dashboard()
    {
        $student = Auth::guard('student')->user();
        ;

        $registeredSubjects = $student->subjects()->with('teacher')->get();
        $availableSubjects = Subject::whereNotIn('id', $registeredSubjects->pluck('id'))->get();
        $grades = Grade::where('student_id', auth('student')->id())
            ->with(['subject', 'semester'])
            ->get();
        return view('student.index', compact('student', 'registeredSubjects', 'availableSubjects', 'grades'));
    }
    public function subject_register(Request $request)
    {
        $request->validate([
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $student = auth()->user(); // Authenticated student
        $subjectId = $request->subject_id;

        // Check if already registered
        if (!$student->subjects()->where('subject_id', $subjectId)->exists()) {
            $student->subjects()->attach($subjectId);
            return back()->with('success', 'Registered successfully!');
        }

        return back()->with('info', 'You have already registered for this subject.');
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
        $studentIdPath = $request->file('student_id')->store('pending/student_ids', 'public');

        $enrollmentProofPath = $request->file('enrollment_proof')->store('pending/enrollment_proofs', 'public');

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

        return redirect()->route('login.from.student');
    }
    public function download(pending_student $document)
    {
        if (!Storage::exists($document->file_path)) {
            abort(404, 'File not found');
        }

        $extension = pathinfo($document->file_path, PATHINFO_EXTENSION);
        $filename = "{$document->student->name}_{$document->document_type}.{$extension}";

        return Storage::download($document->file_path, $filename);
    }

    public function show(Student $student)
    {
        $documents = $student->documents;
        return view('admin.students.documents', compact('student', 'documents'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Grade;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        return view('teacher.login');
    }
    public function dashboard()
    {
        $teacher = auth()->user();
        $subjects = $teacher->subjects()->with('students')->get();
        return view('teacher.dashboard', compact('subjects'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('teacher')->attempt($credentials)) {
            return redirect()->route('teacher.dashboard');
        }
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput($request->only('email'));

    }
    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('login.from.teacher');
    }
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'semester_id' => 'required|exists:semesters,id',
            'grade' => 'required|numeric|min:0|max:100',
        ]);

        $teacher = auth('teacher')->user();

        Grade::updateOrCreate(
            [
                'student_id' => $request->student_id,
                'subject_id' => $request->subject_id,
                'semester_id' => $request->semester_id,
                'teacher_id' => $teacher->id,
            ],
            [
                'grade' => $request->grade,
            ]
        );

        return back()->with('success', 'Grade saved successfully!');
    }

}

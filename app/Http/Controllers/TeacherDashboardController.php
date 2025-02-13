<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        return view('teacher.login');
    }
    public function dashboard()
    {
        // Get the logged-in teacher
        $teacher = Auth::guard('teacher')->user();

        // Load the students related to the teacher
        $teacher->load(['students', 'stage']);

        // Pass teacher data to the view
        return view('teacher.index  ', compact('teacher'));
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
    public function updateGrade(Request $request, $student_id)
    {
        // Validate the grade input
        $request->validate([
            'midterm' => 'required|numeric|min:0|max:25',
            'quiz' => 'required|numeric|min:0|max:10',
            'homework' => 'required|numeric|min:0|max:10',
            'activity' => 'required|numeric|min:0|max:5',
            'final' => 'required|numeric|min:0|max:50',
        ]);

        $total = $request->midterm + $request->quiz + $request->homework + $request->activity + $request->final;


        // Get the logged-in teacher
        $teacher = Auth::guard('teacher')->user();

        // Update the grade in the pivot tablem
        $teacher->students()->updateExistingPivot($student_id, [
            'midterm' => $request->midterm,
            'quiz' => $request->quiz,
            'homework' => $request->homework,
            'activity' => $request->activity,
            'final' => $request->final,
            'total' => $total,

        ]);

        return redirect()->route('teacher.dashboard')->with('success', 'Grade updated successfully.');

    }
}

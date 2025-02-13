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
}

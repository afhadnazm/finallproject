<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Grade;
use App\Models\Subject;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        return view('teacher.login');
    }
    public function dashboard()
    {
        $teacher = auth()->guard('teacher')->user();

        $subjects = Subject::with(['students', 'stage', 'semester'])
            ->where('teacher_id', $teacher->id)
            ->get();

        return view('teacher.index', compact('subjects'));
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

    public function updateGrades(Request $request)
    {
        $gradesData = $request->grades;

        foreach ($gradesData as $id => $data) {
            $grade = Grade::find($id);

            $grade->midterm = $data['midterm'];
            $grade->final = $data['final'];
            $grade->practical = $data['practical'];
            $grade->total = ($data['midterm'] ?? 0) + ($data['final'] ?? 0) + ($data['practical'] ?? 0);
            $grade->comments = $data['comments'] ?? null;

            $grade->save();
        }

        return back()->with('success', 'Grades updated successfully!');
    }


}

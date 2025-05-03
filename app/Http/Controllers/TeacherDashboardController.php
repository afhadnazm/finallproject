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
        $teacher = Auth::guard('teacher')->user();

        // Get all subjects taught by this teacher with their students
        $subjects = Subject::with(['students', 'stage', 'semester'])
            ->where('teacher_id', $teacher->id)
            ->orderBy('name')
            ->get();

        // Calculate dashboard statistics
        $totalStudents = 0;
        $gradesSubmitted = 0;
        $gradesPending = 0;

        foreach ($subjects as $subject) {
            $totalStudents += $subject->students->count();

            foreach ($subject->students as $student) {
                $grade = $student->grades()->where('subject_id', $subject->id)->first();
                if ($grade && $grade->total !== null) {
                    $gradesSubmitted++;
                } else {
                    $gradesPending++;
                }
            }
        }

        return view('teacher.index', compact(
            'subjects',
            'totalStudents',
            'gradesSubmitted',
            'gradesPending',
            'teacher'
        ));
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

    public function updateGrade(Request $request)
    {
        $request->validate([
            'student_id' => 'required|integer',
            'subject_id' => 'required|integer',
            'midterm' => 'nullable|numeric|min:0|max:30',
            'final' => 'nullable|numeric|min:0|max:40',
            'practical' => 'nullable|numeric|min:0|max:30',
        ]);

        $grade = Grade::firstOrNew([
            'student_id' => $request->student_id,
            'subject_id' => $request->subject_id,
        ]);

        $grade->midterm = $request->midterm ?? 0;
        $grade->final = $request->final ?? 0;
        $grade->practical = $request->practical ?? 0;
        $grade->total = $grade->midterm + $grade->final + $grade->practical;

        $grade->save();

        return response()->json(['success' => true]);


    }
}

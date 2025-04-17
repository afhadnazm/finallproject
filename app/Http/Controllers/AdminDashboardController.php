<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function dashboard()
    {
        $student = Auth::guard('admin')->user();


        // Pass teacher data to the view
        return view('admin.index');
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
    public function pending()
{
    $students = Student::where('status', 'pending')->get();
    return view('admin.students.pending', compact('students'));
}

public function approve(Student $student)
{
    $student->update(['status' => 'approved']);
    $student->notify(new RegistrationApproved());
    return back()->with('success', 'Student approved!');
}

public function reject(Request $request, Student $student)
{
    $request->validate(['rejection_reason' => 'required|string']);
    
    $student->update([
        'status' => 'rejected',
        'rejection_reason' => $request->rejection_reason
    ]);
    
    $student->notify(new RegistrationRejected($request->rejection_reason));
    return back()->with('success', 'Student rejected.');
}
}

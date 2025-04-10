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
}

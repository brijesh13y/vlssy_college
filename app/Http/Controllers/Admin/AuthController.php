<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        if (session()->has('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Simple hardcoded admin credentials (for production, use proper authentication)
        if ($validated['email'] === 'admin@vlssycollege.edu' && $validated['password'] === 'password') {
            session(['admin_logged_in' => true, 'admin_email' => $validated['email']]);
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        session()->forget('admin_email');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }
}
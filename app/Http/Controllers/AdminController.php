<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the admin login form.
     */
    public function showLogin()
    {
        return view('admin.login');
    }

    /**
     * Handle an incoming admin authentication request.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($credentials['email'] === 'admin@email.com' && $credentials['password'] === '123456') {
            $request->session()->put('admin_authenticated', true);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    /**
     * Display the admin dashboard if authenticated.
     */
    public function dashboard(Request $request)
    {
        if (!$request->session()->get('admin_authenticated')) {
            return redirect()->route('admin.login');
        }

        return view('admin.dashboard');
    }

    /**
     * Log the admin out of the application.
     */
    public function logout(Request $request)
    {
        $request->session()->forget('admin_authenticated');
        return redirect()->route('admin.login');
    }
}

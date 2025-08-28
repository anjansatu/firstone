<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin login form.
     */
    public function showLogin()
    {
        return view('admin.login');
    }

    /**
     * Handle the admin authentication request.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $adminEmail = 'admin@email.com';
        $adminPassword = '12345678';

        if ($credentials['email'] === $adminEmail && $credentials['password'] === $adminPassword) {
            $request->session()->put('admin', ['email' => $credentials['email']]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => __('Invalid credentials.'),
        ]);
    }

    /**
     * Show the admin dashboard with sample podcast data.
     */
    public function dashboard(Request $request)
    {
        if (!$request->session()->has('admin')) {
            return redirect()->route('admin.login');
        }

        $podcasts = [
            ['name' => 'Mindful Wanderers', 'duration' => '45 mins', 'category' => 'Travel', 'latest' => 'Ep 120: The Journey Within', 'average' => '40 mins'],
            ['name' => 'Science Explained', 'duration' => '30 mins', 'category' => 'Science', 'latest' => 'Ep 45: Quantum Realities', 'average' => '32 mins'],
            ['name' => 'Business Buzz', 'duration' => '50 mins', 'category' => 'Finance', 'latest' => 'Ep 30: Market Trends', 'average' => '48 mins'],
        ];

        return view('admin.dashboard', ['podcasts' => $podcasts]);
    }

    /**
     * Display the admin profile.
     */
    public function profile(Request $request)
    {
        if (!$request->session()->has('admin')) {
            return redirect()->route('admin.login');
        }

        $admin = $request->session()->get('admin');

        return view('admin.profile', ['admin' => $admin]);
    }

    /**
     * Log the admin out of the application.
     */
    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect()->route('admin.login');
    }
}


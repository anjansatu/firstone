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
     * Show the admin registration form.
     */
    public function showRegister()
    {
        return view('admin.register');
    }

    /**
     * Handle an incoming admin registration request.
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $request->session()->put('admin_credentials', $validated);

        return redirect()->route('admin.login')->with('status', __('Registration successful. Please log in.'));
    }

    /**
     * Handle an incoming admin authentication request.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $admin = $request->session()->get('admin_credentials', [
            'email' => 'admin@email.com',
            'password' => '12345678',
        ]);

        if ($credentials['email'] === $admin['email'] && $credentials['password'] === $admin['password']) {
            $request->session()->put('admin_authenticated', true);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => __('Invalid credentials.'),
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
     * Display the admin profile if authenticated.
     */
    public function profile(Request $request)
    {
        if (!$request->session()->get('admin_authenticated')) {
            return redirect()->route('admin.login');
        }

        $admin = $request->session()->get('admin_credentials', [
            'email' => 'admin@email.com',
        ]);

        return view('admin.profile', ['admin' => $admin]);
    }

    /**
     * Log the admin out of the application.
     */
    public function logout(Request $request)
    {
        $request->session()->forget('admin_authenticated');
        return redirect()->route('admin.login');
    }

    /**
     * Display the admin users page if authenticated.
     */
    public function users(Request $request)
    {
        if (!$request->session()->get('admin_authenticated')) {
            return redirect()->route('admin.login');
        }

        return view('admin.users');
    }

    /**
     * Display the admin analytics page if authenticated.
     */
    public function analytics(Request $request)
    {
        if (!$request->session()->get('admin_authenticated')) {
            return redirect()->route('admin.login');
        }

        return view('admin.analytics');
    }

    /**
     * Display the admin settings page if authenticated.
     */
    public function settings(Request $request)
    {
        if (!$request->session()->get('admin_authenticated')) {
            return redirect()->route('admin.login');
        }

        return view('admin.settings');
    }
}

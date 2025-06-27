<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Show login form
     */
    public function index()
    {
        
        return view('login');
    }

    /**
     * Handle login attempt
     */
    public function authentication(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Redirect sesuai role
            $user = Auth::user();
            switch ($user->role) {
                case 'admin':
                    return redirect('/admin/dashboard');
                case 'kepala':
                    return redirect('/kepala/dashboard');
                case 'petugas':
                    return redirect('/petugas/dashboard');
                case 'perawat':
                    return redirect('/perawat/dashboard');
                default:
                    return redirect('/');
            }
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            switch (Auth::user()->role->name) {
                case 'mahasiswa':
                    return redirect()->intended('dashboard_mahasiswa');
                case 'dosen':
                    return redirect()->intended('dashboard_dosen');
                case 'ketua_jurusan':
                    return redirect()->intended('dashboard_ketua_jurusan');
                case 'koordinator':
                    return redirect()->intended('dashboard_koordinator');
                default:
                    return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}


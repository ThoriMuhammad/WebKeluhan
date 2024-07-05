<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
 {
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $request->validate([
            'nik' => 'required',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('nik', 'password');

        if ($request->nik == 'admin'){
            if (Auth::attempt($credentials)) {
                session(['nik' => $request->nik]);
                return redirect()->route('dashboard.admin')->with('success', 'Login berhasil!');
            }
        }

        if (Auth::attempt($credentials)) {
            session(['nik' => $request->nik]);
            return redirect()->route('dashboard.keluhan')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'nik' => 'NIK atau password salah.',
        ])->onlyInput('nik');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logout berhasil!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('nik', 'password'); // Sesuaikan dengan nama input form

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            $redirectPath = (Auth::user()->role == 'PU') ? '/dashboard' : '/akun';
            return redirect()->intended($redirectPath);
        }


        // Jika autentikasi gagal
        return redirect()->back()->withErrors(['msg' => 'Login gagal. Periksa kembali NIK dan password Anda.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Ganti dengan redirect ke halaman yang sesuai setelah logout
    }
}

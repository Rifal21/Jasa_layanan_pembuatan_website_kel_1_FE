<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index() {
        return view('login.index', [
            'title' => "IMR Login",
        ]);
    }

    public function login(Request $request): RedirectResponse {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            // Authentication successful, perform necessary actions
            return redirect('/')->with('success' , 'Login successful');
        } else {
            // Authentication failed, handle the error
            return back()->with('loginError' ,'Data yang anda masukan salah!');
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil');
    }
}

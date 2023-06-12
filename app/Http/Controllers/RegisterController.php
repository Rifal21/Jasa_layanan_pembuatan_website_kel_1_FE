<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controller\Hash;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => "IMR Login",
        ]);
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => ['required' , 'max:125' ],
        //     'username' => ['required' ,'min:3', 'max:125' , 'unique:users'],
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:5|max:125'
        // ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);

        Http::post('http://localhost:8000/auth/register', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return redirect('/login')->with('success' , 'Akun Berhasil di daftarkan');
    }
}

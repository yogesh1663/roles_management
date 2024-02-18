<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        $cridentials = $request->only('email', 'password');
        if (Auth::attempt($cridentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Invalid Email or Password.');
        }
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}

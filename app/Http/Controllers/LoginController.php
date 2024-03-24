<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/dashboard')->with('success', 'Login successful!');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->only('email'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

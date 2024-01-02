<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index() 
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function changepassword()
    {
        return view('auth.gantipass');
    }

    public function processchangepassword(Request $request)
    {
        // cek password lama
        if(!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', 'old password not match with your current password');
        }

        if($request->new_password != $request->repeat_password) {
            return back()->with('error', 'new password and repeat password not match');
        }

        auth()->user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('status', 'change password success');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('Admin.Login');
    }

    public function register()
    {
        return view('Admin.Register');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:4'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('Admin');
        }

        return back()->with('LoginGagal', 'Login Gagal!!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/Login');
    }
}

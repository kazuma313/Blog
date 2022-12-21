<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
    
    public function store(Request $request)
    {
        

        $validation = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:4',
            'name' => 'required|min:6'
        ]);

        // dd($validation);
        $validation['password'] = Hash::make($request->inputPassword);

        


        User::create($validation);

        return redirect('/Login');
        
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

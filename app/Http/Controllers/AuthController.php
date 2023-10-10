<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            if (auth()->user()->role == 'admin') {
                return redirect('/admin/home');
            } elseif (auth()->user()->role == 'client') {
                return redirect('/client/home');
            }
        }

        return redirect('/login')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->role = 'client';
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('admin.users');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}

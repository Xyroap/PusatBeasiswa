<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/register')
            ->with('success', 'Register berhasil!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/dashboard');
    }
}
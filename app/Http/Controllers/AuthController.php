<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            return redirect('/home');
        }

        return redirect()->to('/login')->withErrors([
            'login' => 'Invalid username or password.',
        ]);
    }
}
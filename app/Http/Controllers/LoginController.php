<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function actionLogin(Request $request) {
        $validatedData = $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($validatedData)) {
            return redirect()->route('dashboard');
        }
        return back()->with('msg', 'Email / password salah');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function login(Request $request){

        $validated = $request->validate([
            'login' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withInput()->withErrors([
            'login' => 'Неверный логин или пароль'
        ]);

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/');
    }
}

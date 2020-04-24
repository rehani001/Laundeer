<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auths.login');
    }

    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('username', 'password'))) {
    		return redirect('/dashboard');
    	}else{
            return redirect('/')->with('fail','Username atau Password Salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

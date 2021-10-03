<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('backend.login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('backend.home.index');
        } else {
            return redirect()->route('backend.login.login');
        }
    }


    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('backend.login.login');
        }
    }
}

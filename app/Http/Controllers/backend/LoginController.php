<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        ], [
            'email.required' => 'Eposta alanı zorunludur',
            'password.required' => 'Parola alanı zorunludur',
        ]);

//        $credentials = $request->only('email', 'password');


        $login_information = User::where('email', $request->email)->first();
        if ($login_information) {
            if ($login_information->status == 1) {
                if (Hash::check($request->password, $login_information->password)) {
                    Auth::login($login_information);
                    return redirect()->route('backend.home.index');
                } else {
                    return redirect()->route('backend.login.index')->with('fail', 'Parola Hatalı');
                }
            } else {
                return redirect()->route('backend.login.index')->with('fail', 'Yetkiniz yok');
            }
        } else {
            return redirect()->route('backend.login.index')->with('fail', 'Kullanıcı yok');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.login.index');
    }
}

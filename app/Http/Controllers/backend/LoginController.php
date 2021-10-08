<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

//        $credentials = $request->only('email', 'password');


        $login_information = User::where('email', $request->email)->first();
        if ($login_information) {
            if ($login_information->status == 1) {
                if ($login_information->password == $request->password) {
                    return redirect()->route('backend.home.index');
                } else {
                    return redirect()->route('backend.login.index')->with('fail', 'Parola Hatalı.');
                }
            } else {
                return redirect()->route('backend.login.index')->with('fail', 'Yetkiniz yok.');
            }

        } else {
            return redirect()->route('backend.login.index')->with('fail', 'Kullanıcı yok.');
        }

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.login.index');
    }
}

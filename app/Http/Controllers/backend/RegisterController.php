<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('backend.register.index');
    }

    function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ], [
            'name.required' => 'Ad soyad alanı zorunludur',
            'email.required' => 'Eposta olmak zorunda',
            'email.email' => 'Geçerli bir email girin.',
            'email.unique' => 'Kayıtlı eposta girdiniz.',
            'password.required' => 'Parola alanı doldurlmak zorundadır.',
        ]);

        $request->merge(['password' => Hash::make(request('password'))]);
        User::create($request->except('_token'));

        return redirect()->route('backend.login.index')->with('success', 'Başarıyla kayıt oldunuz.');
    }
}

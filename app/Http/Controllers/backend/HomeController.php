<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('backend.login.login');
        } elseif (auth()->user()->status !== 1) {
            return redirect()->route('backend.login.login');
        } else {
            return view('backend.home.index');
        }
    }
}

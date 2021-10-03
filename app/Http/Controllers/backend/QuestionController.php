<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        //auth control
        if (!Auth::check()) {
            return redirect()->route('backend.login.login');
        } elseif (auth()->user()->status !== 1) { //is Admin ?
            return redirect()->route('backend.login.login');
        }

        $questions = Question::all();

        return view('backend.question.index', compact('questions'));

    }
}

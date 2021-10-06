<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Employee;
use App\Models\Form;
use App\Models\OfficeImage;
use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $questions = Question::where('status', 1)->get();
        $contents = Content::all();
        $contacts = Contact::all();
        $officeImages = OfficeImage::all();
        $employees = Employee::all();
        $i = 0;
        return view('frontend.layouts.app',compact('questions', 'contents','officeImages','contacts','employees','i'));
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('frontend.components.footer');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'mail' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
                'isKvkk' => 'required'
            ]);

            ContactForm::create([
                'name' => $request->name,
                'mail' => $request->mail,
                'subject' => $request->subject,
                'message' => $request->message,
                'isKvkk' => (isset($request->isKvkk) && ($request->isKvkk == 'on')) ? true : false
            ]);

            return redirect()->route('frontend.home.index', '#contact-section')->with('success0', 'Mesajınız kaydedildi.');
        } catch (\Exception $e) {
            return redirect()->route('frontend.home.index', '#contact-section')->with('error0', 'Mesajınız kaydedilemedi.');
        }
    }

    public function create()
    {
        return view('frontend.layouts.app');
    }
}

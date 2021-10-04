<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    public function index()
    {
        $contactforms = ContactForm::all();

        return view('backend.contact-form.index', compact('contactforms'));
    }

    public function destroy($id)
    {
        $contactform = ContactForm::find($id);
        $contactform->delete();
        return redirect()->route('backend.contact-form.index')->withSuccess('Başvuru Başarıyla Silindi.');
    }
}

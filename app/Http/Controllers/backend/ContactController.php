<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('backend.contact.index', compact('contacts'));

    }
    public function edit($id)
    {
        $contact = Contact::find($id) ?? abort(404, 'Soru Bulunamadı.');

        return view('backend.contact.edit', compact('contact'));
    }

    public function show($id)
    {
        $contact = Contact::where('id', $id);

        return view('backend.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update([
            'phone' => $request->phone,
            'mail' => $request->mail,
            'address' => $request->address,
            'mapUrl' => $request->mapUrl,
        ]);

        return redirect()->route('backend.contact.index')->withSuccess('İletişim bilgileri başarıyla güncellendi.');
    }
}

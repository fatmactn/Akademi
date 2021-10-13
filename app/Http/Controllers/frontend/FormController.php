<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('frontend.components.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nameSurname' => 'required',
            'mail' => 'required|email',
            'linkedinUrl' => 'required',
            'resumePath' => 'mimes:pdf',
            'isKvkk' => 'required'
        ]);

        $fileModel = new Form;

        $fileModel->nameSurname = $request->nameSurname;
        $fileModel->mail = $request->mail;
        $fileModel->linkedinUrl = $request->linkedinUrl;
        $fileModel->isKvkk = (isset($request->isKvkk) && ($request->isKvkk == 'on')) ? true : false;

        if ($request->file()) {
            $fileName = time() . '_' . $request->resumePath->getClientOriginalName();
            $filePath = $request->file('resumePath')->storeAs('uploads', $fileName, 'public');
            $fileModel->resumePath = '/storage/' . $filePath;

        }
        else {
            $fileModel->resumePath ="";
        }
        $fileModel->save();
        return redirect()->route('frontend.home.index', '#apply-section')->with('success1', 'Başvurunuz kaydedildi.');


    }

    public function create()
    {
        return view('frontend.index');
    }
}

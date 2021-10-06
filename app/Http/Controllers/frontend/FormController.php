<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('frontend.components.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nameSurname' => 'required',
            'mail' => 'required|email',
            'linkedinUrl' => 'required',
            'resumePath' => 'required|mimes:pdf',
            'isKvkk' => 'required'
        ]);

        $fileModel = new Form;

        if($request->file()) {
            $fileName = time().'_'.$request->resumePath->getClientOriginalName();
            $filePath = $request->file('resumePath')->storeAs('uploads', $fileName, 'public');

            $fileModel->nameSurname = $request->nameSurname;
            $fileModel->mail = $request->mail;
            $fileModel->linkedinUrl = $request->linkedinUrl;
            $fileModel->isKvkk =  (isset($request->isKvkk) && ($request->isKvkk == 'on')) ? true:false;
            $fileModel->resumePath = '/storage/' . $filePath;
            $fileModel->save();

            return redirect()->route('frontend.home.index')->withSuccess('Başvurunuz Kaydedildi.');
        }

        //Form::create([
          //  'nameSurname' => $request->nameSurname,
          //  'mail' => $request->mail,
            //'linkedinUrl' => $request->linkedinUrl,
           // 'isKvkk' => (isset($request->isKvkk) && ($request->isKvkk == 'on')) ? true:false,
        //]);


        //return redirect()->route('frontend.form.index')->withSuccess('Başvurunuz Kaydedildi.');
    }

    public function create()
    {
        return view('frontend.index');
    }
}

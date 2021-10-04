<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();

        return view('backend.form.index', compact('forms'));
    }

    public function destroy($id)
    {
        $form = Form::find($id);
        $form->delete();
        return redirect()->route('backend.form.index')->withSuccess('Başvuru Başarıyla Silindi.');
    }
}

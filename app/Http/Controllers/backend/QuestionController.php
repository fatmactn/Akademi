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

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
        Question::create($request->post());
        return redirect()->route('backend.question.index')->withSuccess('Soru Başarıyla Kaydedildi.');
    }

    public function create()
    {
        return view('backend.question.create');
    }

    public function edit($id)
    {
        $question = Question::find($id) ?? abort(404,'Soru Bulunamadı.');

        return view('backend.question.edit',compact('question'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $question = Question::find($id) ?? abort(404,'Soru Bulunamadı.');
        Question::where('id',$id)->update($request->except(['_method','_token']));
        return redirect()->route('backend.question.index')->withSuccess('Soru Başarıyla Güncellendi.');
    }

    public function destroy($id)
    {
        $question = Question::find($id) ?? abort(404,'Soru Bulunamadı.');
        $question->delete();
        return redirect()->route('backend.question.index')->withSuccess('Soru Başarıyla Silindi.');
    }
}

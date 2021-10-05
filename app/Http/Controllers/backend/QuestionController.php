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
        $question = Question::find($id) ?? abort(404, 'Soru Bulunamadı.');

        return view('backend.question.edit', compact('question'));
    }

    public function show($id)
    {
        $question = Question::where('id', $id);

        return view('backend.question.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        //dd($request->all());

        $question->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'status' => (isset($request->status) && ($request->status == 'on')) ? true:false,
        ]);

        //dd($question);

        return redirect()->route('backend.question.index')->withSuccess('Soru Başarıyla Güncellendi.');
    }

    public function destroy($id)
    {
        $question = Question::find($id) ?? abort(404, 'Soru Bulunamadı.');
        $question->delete();
        return redirect()->route('backend.question.index')->withSuccess('Soru Başarıyla Silindi.');
    }
}

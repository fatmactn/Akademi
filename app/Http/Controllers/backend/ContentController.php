<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;


class ContentController extends Controller
{
    public function index()
    {

        $contents = Content::all();

        return view('backend.content.index', compact('contents'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ], [
            'title.required' => 'Başlık zorunludur',
            'content.required' => 'İçerik zorunludur',
        ]);
        Content::create($request->post());
        return redirect()->route('backend.content.index')->withSuccess('İçerik başarıyla kaydedildi');
    }

    public function create()
    {
        return view('backend.content.create');
    }

    public function edit($id)
    {
        $content = Content::find($id) ?? abort(404, 'İçerik Bulunamadı.');

        return view('backend.content.edit', compact('content'));
    }

    public function show($id)
    {
        $content = Content::where('id', $id);

        return view('backend.content.edit', compact('content'));
    }

    public function update(Request $request, Content $content)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ], [
            'title.required' => 'Başlık zorunludur',
            'content.required' => 'İçerik zorunludur',
        ]);

        //dd($request->all());

        $content->update([
            'title' => $request->title,
            'content' => $request->get('content'),
            'status' => (isset($request->status) && ($request->status == 'on')) ? true:false,
        ]);


        return redirect()->route('backend.content.index')->withSuccess('İçerik Başarıyla Güncellendi.');
    }

    public function destroy($id)
    {
        $content = Content::find($id) ?? abort(404, 'İçerik Bulunamadı.');
        $content->delete();
        return redirect()->route('backend.content.index')->withSuccess('İçerik Başarıyla Silindi.');
    }
}


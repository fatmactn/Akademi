<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\OfficeImage;
use Illuminate\Http\Request;

class OfficeImageController extends Controller
{
    public function index()
    {
        $officeImages = OfficeImage::all();

        return view('backend.officeImage.index', compact('officeImages'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'imageUrl' => 'required'
        ]);
        OfficeImage::create($request->post());
        return redirect()->route('backend.officeImage.index')->withSuccess('Resim Başarıyla Kaydedildi.');
    }

    public function create()
    {
        return view('backend.officeImage.create');
    }

    public function edit($id)
    {
        $officeImage = OfficeImage::find($id) ?? abort(404, 'Resim Bulunamadı.');

        return view('backend.officeImage.edit', compact('officeImage'));
    }

    public function show($id)
    {
        $officeImage = OfficeImage::where('id', $id);

        return view('backend.officeImage.edit', compact('officeImage'));
    }

    public function update(Request $request, OfficeImage $officeImage)
    {
        $request->validate([
            'title' => 'required',
            'imageUrl' => 'required'
        ]);


        $officeImage->update([
            'title' => $request->title,
            'imageUrl' => $request->imageUrl,
            'status' => (isset($request->status) && ($request->status == 'on')) ? true:false,
        ]);


        return redirect()->route('backend.officeImage.index')->withSuccess('Resim Başarıyla Güncellendi.');
    }

    public function destroy($id)
    {
        $officeImage = OfficeImage::find($id) ?? abort(404, 'Resim Bulunamadı.');
        $officeImage->delete();
        return redirect()->route('backend.officeImage.index')->withSuccess('Resim Başarıyla Silindi.');
    }
}

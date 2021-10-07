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
            'imageUrl' => 'required|mimes:jpg,jpeg'
        ]);

        $fileModel = new OfficeImage;

        if ($request->file()) {
            $fileName = time() . '_' . $request->imageUrl->getClientOriginalName();
            $filePath = $request->file('imageUrl')->storeAs('uploads', $fileName, 'public');

            $fileModel->title = $request->title;
            $fileModel->content = $request->get('content');
            $fileModel->imageUrl = '/storage/' . $filePath;
            $fileModel->save();

            return redirect()->route('backend.officeImage.index')->withSuccess('Resim Başarıyla Kaydedildi.');
        }
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
        ]);
        $officeImage->title = $request->title;
        $officeImage->content = $request->get('content');
        if ($request->file()) {
            $fileName = time() . '_' . $request->imageUrl->getClientOriginalName();
            $filePath = $request->file('imageUrl')->storeAs('uploads', $fileName, 'public');
            $officeImage->imageUrl = '/storage/' . $filePath;
        }
        $officeImage->save();

        return redirect()->route('backend.officeImage.index')->withSuccess('Resim Başarıyla Güncellendi.');

    }

    public function destroy($id)
    {
        $officeImage = OfficeImage::find($id) ?? abort(404, 'Resim Bulunamadı.');
        $officeImage->delete();
        return redirect()->route('backend.officeImage.index')->withSuccess('Resim Başarıyla Silindi.');
    }
}

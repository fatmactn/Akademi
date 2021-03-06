<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();

        return view('backend.employee.index', compact('employees'));
    }


    public function create()
    {
        return view('backend.employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nameSurname' => 'required',
            'degree' => 'required',
            'imageUrl' => 'required|mimes:jpg,jpeg',
            'linkedinUrl' => 'required',
        ], [
            'nameSurname.required' => 'Ad soyad alanı zorunludur',
            'degree.required' => 'Yetki alanı boş olamaz',
            'imageUrl.required' => 'Lütfen resim ekleyiniz',
            'linkedinUrl.required' => 'Lİnkedin hesabınızı ekleyiniz',
        ]);
        $fileModel = new Employee;

        if ($request->file()) {
            $fileName = time() . '_' . $request->imageUrl->getClientOriginalName();
            $filePath = $request->file('imageUrl')->storeAs('uploads', $fileName, 'public');

            $fileModel->nameSurname = $request->nameSurname;
            $fileModel->degree = $request->degree;
            $fileModel->linkedinUrl = $request->linkedinUrl;
            $fileModel->status = (isset($request->status) && ($request->status == 'on')) ? true : false;
            $fileModel->imageUrl = '/storage/' . $filePath;
            $fileModel->save();

            return redirect()->route('backend.employee.index')->withSuccess('Personel Başarıyla Kaydedildi.');
        }
    }


    public function show($id)
    {
        $employee = Employee::where('id', $id);
        return view('backend.employee.edit', compact('employee'));
    }


    public function edit($id)
    {
        $employee = Employee::find($id) ?? abort(404, 'Kişi Bulunamadı.');

        return view('backend.employee.edit', compact('employee'));
    }


    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nameSurname' => 'required',
            'degree' => 'required',
            'linkedinUrl' => 'required',
        ], [
            'nameSurname.required' => 'Ad soyad alanı zorunludur',
            'degree.required' => 'Yetki alanı boş olamaz',
            'linkedinUrl.required' => 'Lİnkedin hesabınızı ekleyiniz',
        ]);
        $employee->nameSurname = $request->nameSurname;
        $employee->degree = $request->degree;
        $employee->linkedinUrl = $request->linkedinUrl;
        $employee->status = (isset($request->status) && ($request->status == 'on')) ? true : false;
        if ($request->file()) {
            $fileName = time() . '_' . $request->imageUrl->getClientOriginalName();
            $filePath = $request->file('imageUrl')->storeAs('uploads', $fileName, 'public');
            $employee->imageUrl = '/storage/' . $filePath;
        }
        $employee->save();

        return redirect()->route('backend.employee.index')->withSuccess('Personel Başarıyla Güncellendi.');
    }


    public function destroy($id)
    {
        $question = Employee::find($id) ?? abort(404, 'Kişi Bulunamadı.');
        $question->delete();
        return redirect()->route('backend.employee.index')->withSuccess('Soru Başarıyla Silindi.');
    }
}

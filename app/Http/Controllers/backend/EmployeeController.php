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
            'imageUrl' => 'required',
            'linkedinUrl' => 'required',
        ]);

        $fileModel = $employee;

        if ($request->file())
        {
            $fileName = time() . '_' . $request->imageUrl->getClientOriginalName();
            $filePath = $request->file('imageUrl')->storeAs('uploads', $fileName, 'public');

            $fileModel->nameSurname = $request->nameSurname;
            $fileModel->degree = $request->degree;
            $fileModel->linkedinUrl = $request->linkedinUrl;
            $fileModel->status = (isset($request->status) && ($request->status == 'on')) ? true : false;
            $fileModel->imageUrl = '/storage/' . $filePath;
            $fileModel->save();

            return redirect()->route('backend.employee.index')->withSuccess('Personel Başarıyla Güncellendi.');
        }

/*
        $employee->update([
            'nameSurname' => $request->nameSurname,
            'degree' => $request->degree,
            'imageUrl' => $request->imageUrl,
            'linkedinUrl' => $request->linkedinUrl,
            'status' => (isset($request->status) && ($request->status == 'on')) ? true:false,
        ]);
        return redirect()->route('backend.employee.index')->withSuccess('Personel Başarıyla Güncellendi.');*/

    }


    public function destroy($id)
    {
        $question = Employee::find($id) ?? abort(404, 'Kişi Bulunamadı.');
        $question->delete();
        return redirect()->route('backend.employee.index')->withSuccess('Soru Başarıyla Silindi.');
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        try {
            $Formapi = Form::all();
            return response([
                'status' => 'success',
                'forms' => $Formapi
            ],200);
        }catch (\Exception $exception){
            return response([
                'status' => 'error',
                'message' => $exception->getMessage()
            ],$exception->getCode());
        }
    }

    public function create(Request $request)
    {
        try {
            if($Formapi = Form::create($request->except('_token'))){
                return response([
                    'status' => 'success',
                    'forms' => $Formapi
                ]);
            }
        }
        catch (\Exception $exception){
            return response([
                'status' => 'error',
                'message' => $exception->getMessage()
            ],$exception->getCode());
        }
    }





    public function show($id)
    {
        try{
            if(Form::find($id)==null){
                return response([
                    'message' => $id . ' Değişkeni yok'
                ],200);
            }
            else{
                return response([
                    'status' => 'success',
                    'forms' => Form::find($id)
                ],200);
            }
        }
        catch (\Exception $exception){
            return response([
                'status' => 'error',
                'message' => $exception->getMessage()
            ],$exception->getCode());
        }
    }

}

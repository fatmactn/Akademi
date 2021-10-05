<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        try {
            $officeImageApi = ContactForm::all();
            return response([
                'status' => 'success',
                'questions' => $officeImageApi
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
            if($officeImage = ContactForm::create($request->except('_token'))){
                return response([
                    'status' => 'success',
                    'question' => $officeImage
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
            if(ContactForm::find($id)==null){
                return response([
                    'message' => $id . ' Değişkeni yok'
                ],200);
            }
            else{
                return response([
                    'status' => 'success',
                    'question' => ContactForm::find($id)
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

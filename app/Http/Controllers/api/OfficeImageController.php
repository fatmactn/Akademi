<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\OfficeImage;
use Illuminate\Http\Request;

class OfficeImageController extends Controller
{

    public function index()
    {
        try {
            $officeImageApi = OfficeImage::all();
            return response([
                'status' => 'success',
                'officeImages' => $officeImageApi
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
            if($officeImage = OfficeImage::create($request->except('_token'))){
                return response([
                    'status' => 'success',
                    'officeImages' => $officeImage
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
            if(OfficeImage::find($id)==null){
                return response([
                    'message' => $id . ' Değişkeni yok'
                ],200);
            }
            else{
                return response([
                    'status' => 'success',
                    'officeImages' => OfficeImage::find($id)
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

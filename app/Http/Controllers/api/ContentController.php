<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        try {
            $contentApi = Content::all();
            return response([
                'status' => 'success',
                'contents' => $contentApi
            ],200);
        }catch (\Exception $exception){
            return response([
                'status' => 'error',
                'message' => $exception->getMessage()
            ],$exception->getCode());
        }
    }

    public function show($id){
        try{
            if(Content::find($id)==null){
                return response([
                    'message' => $id . ' Değişkeni yok'
                ],200);
            }
            else{
                return response([
                    'status' => 'success',
                    'content' => Content::find($id)
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

    public function create(Request $request){
        try {
            if($content = Content::create($request->except('_token'))){
                return response([
                    'status' => 'success',
                    'content' => $content
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
}

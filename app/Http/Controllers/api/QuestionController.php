<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        try {
            $questionApi = Question::all();
            return response([
                'status' => 'success',
                'questions' => $questionApi
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
           if(Question::find($id)==null){
               return response([
                   'message' => $id . ' Değişkeni yok'
               ],200);
           }
           else{
               return response([
                   'status' => 'success',
                   'question' => Question::find($id)
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
            if($question = Question::create($request->except('_token'))){
                return response([
                    'status' => 'success',
                    'question' => $question
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

    public function destroy($id)
    {
        try {
            $question = Question::find($id);
            if($question==null){
                return response([
                    'message' => $id . ' Değişkeni yok'
                ],200);
            }
            else{
                $question->delete();
                return response([
                    'message' => $id . ' Değişkeni başarıyla silindi.'
                ],200);
            }
        }
        catch (\Exception $exception) {
            return response([
                'status' => 'error',
                'message' => $exception->getMessage()
            ],$exception->getCode());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $question = Question::find($id);
            if($question==null){
                return response([
                    'message' => $id . ' Değişkeni yok'
                ],200);
            }
            else
            {
                $question->update([
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'status' => $request->status,
                ]);
                return response([
                    'message' => $id . ' Değişkeni başarıyla güncellendi.'
                ],200);
            }

        }
        catch (\Exception $exception)
        {
            return response([
                'status' => 'error',
                'message' => $exception->getMessage()
            ],$exception->getCode());
        }
    }
}

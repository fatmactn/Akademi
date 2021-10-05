<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('questions', [\App\Http\Controllers\api\QuestionController::class,'index'])->name('api.questions.index');
Route::get('questions/{id}', [\App\Http\Controllers\api\QuestionController::class,'show'])->name('api.questions.show');
Route::post('questions', [\App\Http\Controllers\api\QuestionController::class,'create'])->name('api.questions.create');

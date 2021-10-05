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
Route::get('questions/{id}', [\App\Http\Controllers\api\QuestionController::class,'destroy'])->name('api.questions.destroy');
Route::post('questions', [\App\Http\Controllers\api\QuestionController::class,'create'])->name('api.questions.create');
Route::post('questions/update/{id}', [\App\Http\Controllers\api\QuestionController::class, 'update'])->name('api.questions.update');

Route::get('contents', [\App\Http\Controllers\api\ContentController::class,'index'])->name('api.contents.index');
Route::get('contents/{id}', [\App\Http\Controllers\api\ContentController::class,'show'])->name('api.contents.show');
Route::post('contents', [\App\Http\Controllers\api\ContentController::class,'create'])->name('api.contents.create');

Route::get('employees', [\App\Http\Controllers\api\EmployeeController::class,'index'])->name('api.employees.index');
Route::get('employees/{id}', [\App\Http\Controllers\api\EmployeeController::class,'show'])->name('api.employees.show');
Route::post('employees', [\App\Http\Controllers\api\EmployeeController::class,'create'])->name('api.employees.create');



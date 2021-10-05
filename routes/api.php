<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



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

Route::get('officeImages', [\App\Http\Controllers\api\OfficeImageController::class,'index'])->name('api.officeImage.index');
Route::get('officeImages/{id}', [\App\Http\Controllers\api\OfficeImageController::class,'show'])->name('api.officeImage.show');
Route::post('officeImages', [\App\Http\Controllers\api\OfficeImageController::class,'create'])->name('api.officeImage.create');

Route::get('forms', [\App\Http\Controllers\api\FormController::class,'index'])->name('api.officeImage.index');
Route::get('forms/{id}', [\App\Http\Controllers\api\FormController::class,'show'])->name('api.officeImage.show');
Route::post('forms', [\App\Http\Controllers\api\FormController::class,'create'])->name('api.officeImage.create');

Route::get('contactForms', [\App\Http\Controllers\api\ContactFormController::class,'index'])->name('api.officeImage.index');
Route::get('contactForms/{id}', [\App\Http\Controllers\api\ContactFormController::class,'show'])->name('api.officeImage.show');
Route::post('contactForms', [\App\Http\Controllers\api\ContactFormController::class,'create'])->name('api.officeImage.create');

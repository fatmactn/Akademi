<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [\App\Http\Controllers\Backend\LoginController::class, 'index'])->name('backend.login.index');
Route::post('/login', [\App\Http\Controllers\Backend\LoginController::class, 'login'])->name('backend.login.login');
Route::get('/register', [\App\Http\Controllers\Backend\RegisterController::class, 'index'])->name('backend.register.index');
Route::post('/register', [\App\Http\Controllers\Backend\RegisterController::class, 'register'])->name('backend.register.register');
Route::get('/logout', [\App\Http\Controllers\Backend\LoginController::class, 'logout'])->middleware('auth')->name('backend.login.logout');

/*
Route::middleware('auth')->group(function () {
    Route::get('/backend/home/index', [\App\Http\Controllers\Backend\HomeController::class, 'index'])->name('backend.home.index');
    Route::get('/backend/question/index', [\App\Http\Controllers\Backend\QuestionController::class, 'index'])->name('backend.question.index');
});*/


Route::group(['middleware' => ['auth']], function() {
    Route::get('/backend/home/index', [\App\Http\Controllers\Backend\HomeController::class, 'index'])->name('backend.home.index');
    Route::get('/backend/question/index', [\App\Http\Controllers\Backend\QuestionController::class, 'index'])->name('backend.question.index');
    Route::get('/backend/question/{id}',[\App\Http\Controllers\Backend\QuestionController::class,'destroy'])->whereNumber('id')->name('backend.question.destroy');
    Route::get('/backend/question/edit/{id}', [\App\Http\Controllers\Backend\QuestionController::class, 'edit'])->whereNumber('id')->name('backend.question.edit');
    Route::get('/backend/question/update/{id}', [\App\Http\Controllers\Backend\QuestionController::class, 'show'])->whereNumber('id')->name('backend.question.show');
    Route::post('/backend/question/update/{question}', [\App\Http\Controllers\Backend\QuestionController::class, 'update'])->name('backend.question.update');
    Route::get('backend/question/create',[\App\Http\Controllers\Backend\QuestionController::class, 'create'])->name('backend.question.create');
    Route::post('backend/question/store',[\App\Http\Controllers\Backend\QuestionController::class, 'store'])->name('backend.question.store');

});

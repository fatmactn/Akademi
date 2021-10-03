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
Route::get('logout', [\App\Http\Controllers\Backend\LoginController::class, 'logout'])->name('backend.login.logout');

Route::middleware('auth')->group(function () {
    Route::get('/backend/home/index', [\App\Http\Controllers\Backend\HomeController::class, 'index'])->name('backend.home.index');
    Route::get('/backend/question/index', [\App\Http\Controllers\Backend\QuestionController::class, 'index'])->name('backend.question.index');
});


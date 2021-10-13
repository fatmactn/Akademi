<?php

use App\Http\Controllers\backend\EmployeeController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/login', [\App\Http\Controllers\backend\LoginController::class, 'index'])->name('backend.login.index');
Route::post('/login', [\App\Http\Controllers\backend\LoginController::class, 'login'])->name('backend.login.login');
Route::get('/register', [\App\Http\Controllers\backend\RegisterController::class, 'index'])->name('backend.register.index');
Route::post('/register', [\App\Http\Controllers\backend\RegisterController::class, 'register'])->name('backend.register.register');


Route::get('/', [\App\Http\Controllers\frontend\HomeController::class, 'index'])->name('frontend.home.index');
Route::post('/',[\App\Http\Controllers\frontend\ContactFormController::class, 'store'])->name('frontend.contactForm.store');
Route::post('/form',[\App\Http\Controllers\frontend\FormController::class, 'store'])->name('frontend.form.store');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/logout', [\App\Http\Controllers\backend\LoginController::class, 'logout'])->name('backend.login.logout');

    Route::get('/backend/home/index', [\App\Http\Controllers\backend\HomeController::class, 'index'])->name('backend.home.index');

    Route::get('/backend/question/index', [\App\Http\Controllers\backend\QuestionController::class, 'index'])->name('backend.question.index');
    Route::get('/backend/question/{id}',[\App\Http\Controllers\backend\QuestionController::class,'destroy'])->whereNumber('id')->name('backend.question.destroy');
    Route::get('/backend/question/edit/{id}', [\App\Http\Controllers\backend\QuestionController::class, 'edit'])->whereNumber('id')->name('backend.question.edit');
    Route::get('/backend/question/update/{id}', [\App\Http\Controllers\backend\QuestionController::class, 'show'])->whereNumber('id')->name('backend.question.show');
    Route::post('/backend/question/update/{question}', [\App\Http\Controllers\backend\QuestionController::class, 'update'])->name('backend.question.update');
    Route::get('backend/question/create',[\App\Http\Controllers\backend\QuestionController::class, 'create'])->name('backend.question.create');
    Route::post('backend/question/store',[\App\Http\Controllers\backend\QuestionController::class, 'store'])->name('backend.question.store');

    Route::get('/backend/content/index', [\App\Http\Controllers\backend\ContentController::class, 'index'])->name('backend.content.index');
    Route::get('/backend/content/{id}',[\App\Http\Controllers\backend\ContentController::class,'destroy'])->whereNumber('id')->name('backend.content.destroy');
    Route::get('/backend/content/edit/{id}', [\App\Http\Controllers\backend\ContentController::class, 'edit'])->whereNumber('id')->name('backend.content.edit');
    Route::get('/backend/content/update/{id}', [\App\Http\Controllers\backend\ContentController::class, 'show'])->whereNumber('id')->name('backend.content.show');
    Route::post('/backend/content/update/{content}', [\App\Http\Controllers\backend\ContentController::class, 'update'])->name('backend.content.update');
    Route::get('backend/content/create',[\App\Http\Controllers\backend\ContentController::class, 'create'])->name('backend.content.create');
    Route::post('backend/content/store',[\App\Http\Controllers\backend\ContentController::class, 'store'])->name('backend.content.store');

    Route::get('/backend/user/index', [\App\Http\Controllers\backend\UserController::class, 'index'])->name('backend.user.index');
    Route::get('/backend/user/{id}',[\App\Http\Controllers\backend\UserController::class,'destroy'])->whereNumber('id')->name('backend.user.destroy');
    Route::get('/backend/user/update/{user}', [\App\Http\Controllers\backend\UserController::class, 'update'])->name('backend.user.update');

    Route::get('/backend/contact/index', [\App\Http\Controllers\backend\ContactController::class, 'index'])->name('backend.contact.index');
    Route::get('/backend/contact/edit/{id}', [\App\Http\Controllers\backend\ContactController::class, 'edit'])->name('backend.contact.edit');
    Route::get('/backend/contact/update/{id}', [\App\Http\Controllers\backend\ContactController::class, 'show'])->name('backend.contact.show');
    Route::post('/backend/contact/update/{contact}', [\App\Http\Controllers\backend\ContactController::class, 'update'])->name('backend.contact.update');

    Route::get('/backend/form/index', [\App\Http\Controllers\backend\FormController::class, 'index'])->name('backend.form.index');
    Route::get('/backend/form/{id}',[\App\Http\Controllers\backend\FormController::class,'destroy'])->name('backend.form.destroy');

    Route::get('/backend/officeImage/index', [\App\Http\Controllers\backend\OfficeImageController::class, 'index'])->name('backend.officeImage.index');
    Route::get('/backend/officeImage/{id}',[\App\Http\Controllers\backend\OfficeImageController::class,'destroy'])->whereNumber('id')->name('backend.officeImage.destroy');
    Route::get('/backend/officeImage/edit/{id}', [\App\Http\Controllers\backend\OfficeImageController::class, 'edit'])->whereNumber('id')->name('backend.officeImage.edit');
    Route::get('/backend/officeImage/update/{id}', [\App\Http\Controllers\backend\OfficeImageController::class, 'show'])->whereNumber('id')->name('backend.officeImage.show');
    Route::post('/backend/officeImage/update/{officeImage}', [\App\Http\Controllers\backend\OfficeImageController::class, 'update'])->name('backend.officeImage.update');
    Route::get('backend/officeImage/create',[\App\Http\Controllers\backend\OfficeImageController::class, 'create'])->name('backend.officeImage.create');
    Route::post('backend/officeImage/store',[\App\Http\Controllers\backend\OfficeImageController::class, 'store'])->name('backend.officeImage.store');

    Route::get('/backend/contact-form/index', [\App\Http\Controllers\backend\ContactFormController::class, 'index'])->name('backend.contact-form.index');
    Route::get('/backend/contact-form/{id}',[\App\Http\Controllers\backend\ContactFormController::class,'destroy'])->name('backend.contact-form.destroy');

    Route::get('backend/employee/index',[EmployeeController::class, 'index'])->name('backend.employee.index');
    Route::get('backend/employee/create',[EmployeeController::class, 'create'])->name('backend.employee.create');
    Route::post('backend/employee/store',[EmployeeController::class, 'store'])->name('backend.employee.store');
    Route::get('/backend/employee/edit/{id}', [EmployeeController::class, 'edit'])->whereNumber('id')->name('backend.employee.edit');
    Route::post('/backend/employee/update/{employee}', [EmployeeController::class, 'update'])->name('backend.employee.update');
    Route::get('/backend/employee/{id}',[EmployeeController::class,'destroy'])->whereNumber('id')->name('backend.employee.destroy');


    Route::get('/backend/contact-form/index', [\App\Http\Controllers\backend\ContactFormController::class, 'index'])->name('backend.contact-form.index');
    Route::get('/backend/contact-form/{id}',[\App\Http\Controllers\backend\ContactFormController::class,'destroy'])->name('backend.contact-form.destroy');

});


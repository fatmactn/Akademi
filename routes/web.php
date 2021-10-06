<?php

use App\Http\Controllers\Backend\EmployeeController;
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

Route::get('/login', [\App\Http\Controllers\Backend\LoginController::class, 'index'])->name('backend.login.index');
Route::post('/login', [\App\Http\Controllers\Backend\LoginController::class, 'login'])->name('backend.login.login');
Route::get('/register', [\App\Http\Controllers\Backend\RegisterController::class, 'index'])->name('backend.register.index');
Route::post('/register', [\App\Http\Controllers\Backend\RegisterController::class, 'register'])->name('backend.register.register');


Route::get('/index', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.home.index');
Route::post('form/store',[\App\Http\Controllers\Frontend\FormController::class, 'store'])->name('frontend.form.store');

Route::get('/',function (){
    return view('frontend.index');
});


Route::group(['middleware' => ['auth']], function() {

    Route::get('/logout', [\App\Http\Controllers\Backend\LoginController::class, 'logout'])->name('backend.login.logout');

    Route::get('/backend/home/index', [\App\Http\Controllers\Backend\HomeController::class, 'index'])->name('backend.home.index');

    Route::get('/backend/question/index', [\App\Http\Controllers\Backend\QuestionController::class, 'index'])->name('backend.question.index');
    Route::get('/backend/question/{id}',[\App\Http\Controllers\Backend\QuestionController::class,'destroy'])->whereNumber('id')->name('backend.question.destroy');
    Route::get('/backend/question/edit/{id}', [\App\Http\Controllers\Backend\QuestionController::class, 'edit'])->whereNumber('id')->name('backend.question.edit');
    Route::get('/backend/question/update/{id}', [\App\Http\Controllers\Backend\QuestionController::class, 'show'])->whereNumber('id')->name('backend.question.show');
    Route::post('/backend/question/update/{question}', [\App\Http\Controllers\Backend\QuestionController::class, 'update'])->name('backend.question.update');
    Route::get('backend/question/create',[\App\Http\Controllers\Backend\QuestionController::class, 'create'])->name('backend.question.create');
    Route::post('backend/question/store',[\App\Http\Controllers\Backend\QuestionController::class, 'store'])->name('backend.question.store');

    Route::get('/backend/content/index', [\App\Http\Controllers\Backend\ContentController::class, 'index'])->name('backend.content.index');
    Route::get('/backend/content/{id}',[\App\Http\Controllers\Backend\ContentController::class,'destroy'])->whereNumber('id')->name('backend.content.destroy');
    Route::get('/backend/content/edit/{id}', [\App\Http\Controllers\Backend\ContentController::class, 'edit'])->whereNumber('id')->name('backend.content.edit');
    Route::get('/backend/content/update/{id}', [\App\Http\Controllers\Backend\ContentController::class, 'show'])->whereNumber('id')->name('backend.content.show');
    Route::post('/backend/content/update/{content}', [\App\Http\Controllers\Backend\ContentController::class, 'update'])->name('backend.content.update');
    Route::get('backend/content/create',[\App\Http\Controllers\Backend\ContentController::class, 'create'])->name('backend.content.create');
    Route::post('backend/content/store',[\App\Http\Controllers\Backend\ContentController::class, 'store'])->name('backend.content.store');

    Route::get('/backend/user/index', [\App\Http\Controllers\Backend\UserController::class, 'index'])->name('backend.user.index');
    Route::get('/backend/user/{id}',[\App\Http\Controllers\Backend\UserController::class,'destroy'])->whereNumber('id')->name('backend.user.destroy');
    Route::get('/backend/user/update/{user}', [\App\Http\Controllers\Backend\UserController::class, 'update'])->name('backend.user.update');

    Route::get('/backend/contact/index', [\App\Http\Controllers\Backend\ContactController::class, 'index'])->name('backend.contact.index');
    Route::get('/backend/contact/edit/{id}', [\App\Http\Controllers\Backend\ContactController::class, 'edit'])->name('backend.contact.edit');
    Route::get('/backend/contact/update/{id}', [\App\Http\Controllers\Backend\ContactController::class, 'show'])->name('backend.contact.show');
    Route::post('/backend/contact/update/{contact}', [\App\Http\Controllers\Backend\ContactController::class, 'update'])->name('backend.contact.update');

    Route::get('/backend/form/index', [\App\Http\Controllers\Backend\FormController::class, 'index'])->name('backend.form.index');
    Route::get('/backend/form/{id}',[\App\Http\Controllers\Backend\FormController::class,'destroy'])->name('backend.form.destroy');

    Route::get('/backend/officeImage/index', [\App\Http\Controllers\Backend\OfficeImageController::class, 'index'])->name('backend.officeImage.index');
    Route::get('/backend/officeImage/{id}',[\App\Http\Controllers\Backend\OfficeImageController::class,'destroy'])->whereNumber('id')->name('backend.officeImage.destroy');
    Route::get('/backend/officeImage/edit/{id}', [\App\Http\Controllers\Backend\OfficeImageController::class, 'edit'])->whereNumber('id')->name('backend.officeImage.edit');
    Route::get('/backend/officeImage/update/{id}', [\App\Http\Controllers\Backend\OfficeImageController::class, 'show'])->whereNumber('id')->name('backend.officeImage.show');
    Route::post('/backend/officeImage/update/{officeImage}', [\App\Http\Controllers\Backend\OfficeImageController::class, 'update'])->name('backend.officeImage.update');
    Route::get('backend/officeImage/create',[\App\Http\Controllers\Backend\OfficeImageController::class, 'create'])->name('backend.officeImage.create');
    Route::post('backend/officeImage/store',[\App\Http\Controllers\Backend\OfficeImageController::class, 'store'])->name('backend.officeImage.store');

    Route::get('/backend/contact-form/index', [\App\Http\Controllers\Backend\ContactFormController::class, 'index'])->name('backend.contact-form.index');
    Route::get('/backend/contact-form/{id}',[\App\Http\Controllers\Backend\ContactFormController::class,'destroy'])->name('backend.contact-form.destroy');

    Route::get('backend/employee/index',[EmployeeController::class, 'index'])->name('backend.employee.index');
    Route::get('backend/employee/create',[EmployeeController::class, 'create'])->name('backend.employee.create');
    Route::post('backend/employee/store',[EmployeeController::class, 'store'])->name('backend.employee.store');
    Route::get('/backend/employee/edit/{id}', [EmployeeController::class, 'edit'])->whereNumber('id')->name('backend.employee.edit');
    Route::post('/backend/employee/update/{employee}', [EmployeeController::class, 'update'])->name('backend.employee.update');
    Route::get('/backend/employee/{id}',[EmployeeController::class,'destroy'])->whereNumber('id')->name('backend.employee.destroy');


    Route::get('/backend/contact-form/index', [\App\Http\Controllers\Backend\ContactFormController::class, 'index'])->name('backend.contact-form.index');
    Route::get('/backend/contact-form/{id}',[\App\Http\Controllers\Backend\ContactFormController::class,'destroy'])->name('backend.contact-form.destroy');

});


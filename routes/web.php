<?php

use App\Http\Controllers\FormProcessor;
use App\Http\Controllers\home\MainController;
use App\Http\Controllers\hw3\EmployeeController;
use App\Http\Controllers\hw4\LayoutController;
use App\Http\Controllers\Offers;
use App\Http\Controllers\TestController;
use App\Models\Layout;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index']);

//очистка кеша
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    $title = "очистка кеша";
    return view('clear', compact('title'));
});



//Homework 2
Route::get('/userform',[\App\Http\Controllers\hw2\FormProcessor::class, 'index']);
Route::post('/userform', [\App\Http\Controllers\hw2\FormProcessor::class, 'store']);


Route::get('book',[\App\Http\Controllers\hw2\BookController::class,'index']);
Route::get('/book/{id}', [\App\Http\Controllers\hw2\BookController::class, 'destroy'])->name('del');
Route::post('/book/add',[\App\Http\Controllers\hw2\BookController::class, 'store']);


Route::get( '/file', [\App\Http\Controllers\hw2\FileUpload::class, 'index'])->name('file');
Route::post( '/file', [\App\Http\Controllers\hw2\FileUpload::class, 'upload'])->name('upload');

Route::get('/get-json',[\App\Http\Controllers\hw2\UserInfo::class,'GetUserInfo']);


Route::get('testmodel',[\App\Http\Controllers\hw3\EmployeeController::class, 'index'])->name('testmodel');
Route::post('/getcount', [EmployeeController::class, 'getCountEmployee'])->name('getCountEmployee');

Route::post('add_user',[\App\Http\Controllers\hw3\EmployeeController::class, 'AddUser'])->name('add_user');
Route::get('del_user',[\App\Http\Controllers\hw3\EmployeeController::class, 'DelUser'])->name('del_user');


Route::get('layout', [LayoutController::class,'index'])->name('layout');
Route::get('layout/contacts', [LayoutController::class,'Contacts'])->name('contacts');
Route::post('layout',[LayoutController::class, 'checkAge'])->name('hw4');


Route::get('1', TestController::class);

Route::get('offers', Offers::class);

Route::get('test', [FormProcessor::class, 'test']);



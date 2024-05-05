<?php

use App\Http\Controllers\FormProcessor;
use App\Http\Controllers\home\MainController;
use App\Http\Controllers\Offers;
use App\Http\Controllers\TestController;
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




Route::get('1', TestController::class);

Route::get('offers', Offers::class);

Route::get('test', [FormProcessor::class, 'test']);



<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Offers;
use App\Http\Controllers\FormProcessor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Кэш очищен.";
});

Route::get('1', TestController::class);

Route::get('offers', Offers::class);

Route::get('test', [FormProcessor::class, 'test']);

Route::get('/userform', [FormProcessor::class, 'index']);


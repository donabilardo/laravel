<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Offers;

Route::get('/', function () {
    return view('welcome');
});


Route::get('1', TestController::class);

Route::get('offers', Offers::class);

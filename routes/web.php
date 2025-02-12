<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergeenController;

Route::resource('allergenen', AllergeenController::class);


Route::get('/', function () {
    return view('welcome');
});

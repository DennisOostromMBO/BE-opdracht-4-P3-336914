<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergeenController;

Route::resource('allergenen', AllergeenController::class);
Route::get('allergenen/{id}', [AllergeenController::class, 'show'])->name('allergenen.show');
Route::get('allergenen/filter', [AllergeenController::class, 'index'])->name('allergenen.filter');

Route::get('/', function () {
    return view('welcome');
});
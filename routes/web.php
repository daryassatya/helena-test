<?php

use App\Http\Controllers\HelenaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helena', [HelenaController::class, 'index']);
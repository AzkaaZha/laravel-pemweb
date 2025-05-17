<?php

use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("kelurahan", KelurahanController::class);
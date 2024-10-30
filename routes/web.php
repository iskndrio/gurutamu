<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('home.welcome');
});

Route::get('/siswa',[SiswaController::class,'index']);

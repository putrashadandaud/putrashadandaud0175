<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home0175',[HomeController::class,'home']);
Route::get('/artikel0175',[ArtikelController::class,'artikel']);
Route::get('/kontak0175',[KontakController::class,'kontak']);
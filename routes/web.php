<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('includes.dashboard');
});


Route::get('/informasi', function () {
    return view('includes.informasi');
});

Route::get('/renungan', function () {
    return view('includes.renungan');
});

Route::get('/diakonia', function () {
    return view('includes.diakonia');
});

Route::get('/pernikahan', function () {
    return view('includes.pernikahan');
});

Route::get('/kematian', function () {
    return view('includes.kematian');
});



//login admin
Route::get('/login',[AuthController::class,'login'])
->name("login");
Route::post('/login',[AuthController::class,"loginPost"])
->name("login.post");

Route::get('/registrasi',[AuthController::class,'register'])
->name("registrasi");
Route::post('/registrasi', [AuthController::class,"regisPost"])
->name('reg.post');


Route::middleware("auth")->group(function(){
    Route::view("/admin","admin.index")->name("index");
});
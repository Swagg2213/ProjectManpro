<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Jemaat;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Jemaat Route
Route::get('/', function () {
    return redirect('/home/admin');
});
Route::get('/informasi', function () {return view('informasi');});
Route::get('/renungan', function () {return view('renungan');});
Route::get('/diakonia', function () {return view('diakonia');});
Route::get('/pernikahan', function () {return view('pernikahan');});
Route::get('/kematian', function () {return view('kematian');});

//Admin Route 
Route::get('/home/admin',[AdminController::class,'home'])->name("admin.index");
Route::get('/login',[AuthController::class,'login'])->name("login");
Route::post('/login',[AuthController::class,"loginPost"])->name("login.post");
Route::get('/registrasi',[RegisterController::class,'register'])->name("registrasi");
Route::post('/registrasi', [RegisterController::class,"regisPost"])->name('reg.post');
// crud jemaat
Route::get('/jemaat',[JemaatController::class,'show'])->name("show.data");
Route::get('/jemaat/add',[JemaatController::class, 'index']);
Route::post('/jemaat/add',[JemaatController::class,'store'])->name('jemaatAdd');
Route::put('/jemaat/edit/{id}', [JemaatController::class, 'edit'])->name('jemaat.edit');
Route::delete('/jemaat/delete/{id}', [JemaatController::class, 'destroy'])->name('jemaat.delete');
Route::put('/jemaat/update/{id}', [JemaatController::class, 'update'])->name('jemaat.update');

Route::middleware("auth")->group(function(){
    Route::view("/admin","admin.index")->name("index");
});
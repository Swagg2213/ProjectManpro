<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('includes.home');
});

// Route::get('/test', function () {
//     return view('app');
// });

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

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcomepage');
});

Route::get('/Biodata', function () {
    return view('biodata');
});

Route::get('/Komentar', function () {
    return view('komentar');
});

Route::get('/Pertanyaan', function () {
    return view('Pertanyaan');
}); 

Route::get('/Selesai', function () {
    return view('selesai');
});
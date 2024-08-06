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
})->name('welcomepage');

Route::get('/biodata', function () {
    return view('biodata');
})->name('biodata');

Route::get('/komentar', function () {
    return view('komentar');
})->name('komentar');

Route::get('/pertanyaan', function () {
    return view('Pertanyaan');
})->name('pertanyaan');

Route::get('/selesai', function () {
    return view('selesai');
})->name('selesai');

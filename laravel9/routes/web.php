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
    return view('welcome');
});

Route::get('/welcome', function () {
    return '<h1>Semangat belajar Laravel</h1>';
});

Route::get('/salam', function () {
    return '<h1>Ini halaman salam langsung mengembalikan request ke user tanpa melalui view</h1>';
});





Route::get('/welcome', function () {
    return view('halaman_hallo');
});

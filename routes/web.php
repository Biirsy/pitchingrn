<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});Route::get('/budaya', function () {
    return view('budaya');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/isi-a', function () {
    return view('isi-a');
});
Route::get('/isi-b', function () {
    return view('isi-b');
});
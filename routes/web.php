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
    return view('Home');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Menu', function () {
    return view('Menu');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Partners', function () {
    return view('Partners');
});

Route::get('/Cart', function () {
    return view('Cart');
});
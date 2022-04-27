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
    return view('pages.home');
});

Route::get('/company', function () {
    return view('pages.company');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get("/buy-tickets", function() {
    return view("pages.buy-tickets");
});
<?php

use App\Http\Controllers\CompanyController;
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

Route::get('/company', [CompanyController::class, 'index']);

Route::get('/company/{id}', [CompanyController::class, 'show']);

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get("/buy-tickets", function() {
    return view("pages.buy-tickets");
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/admin/company', function () {
    return view('admin.company');
});

Route::get('/admin/client', function () {
    return view('admin.client');
});

Route::get('/admin/ticket', function () {
    return view('admin.ticket');
});

Route::get('/admin/travel', function () {
    return view('admin.travel');
});
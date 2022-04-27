<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
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

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'sendMessage']);

Route::get("/buy-tickets", function() {
    return view("pages.buy-tickets");
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/company/add', [AdminController::class, 'addCompany']);
Route::get('/admin/company/del', [AdminController::class, 'delCompany']);
Route::get('/admin/company/update', [AdminController::class, 'updateCompany']);
Route::get('/admin/company/list', [AdminController::class, 'listCompany']);

Route::post('/admin/company/add', [AdminController::class, 'add']);

Route::get('/admin/client', function () {
    return view('admin.client');
});

Route::get('/admin/ticket', function () {
    return view('admin.ticket');
});

Route::get('/admin/travel', function () {
    return view('admin.travel');
});
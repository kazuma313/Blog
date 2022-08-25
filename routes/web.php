<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Konten;
use Ramsey\Collection\Map\AbstractMap;

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

// admin
Route::get('/Login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/Register', [LoginController::class, 'register'])->name('register')->middleware('guest');

Route::post('/Login', [LoginController::class, 'authenticate']);
Route::post('/Logout', [LoginController::class, 'logout']);

// Route::get('/Admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/Admin/slug', [AdminController::class, 'slug'])->middleware('auth');
Route::get('/Admin', function () {
    return view('Admin.Index');
})->middleware('auth');

Route::resource('/Admin/Post', AdminController::class)->middleware('auth');


Route::get('/Admin_charts', function () {
    return view('Admin.charts');
})->middleware('auth');

Route::get('/Admin_tables', function () {
    return view('Admin.tables');
})->middleware('auth');





// content

Route::get('/', [KontenController::class, 'index']);


Route::get('/About', [AboutController::class,'index']);

Route::get('/Contact', [ContactController::class,'index']);

Route::get('/konten/{konten:slug}', [KontenController::class,'view']);









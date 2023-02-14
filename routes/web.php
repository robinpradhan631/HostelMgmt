<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
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


//No Auth Users Routes
//Rabin Just Work Here

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/filter', [FrontendController::class, 'filter'])->name('filters');
Route::get('/detail', [FrontendController::class, 'detail'])->name('details');



//Use FrontendController For Frontend. You don't need to work on backend so just edit Frontend Controller.
//Follow the syntax as above. Give suitable route name.

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin Route
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
});

//Hostel Route
Route::group(['prefix' => 'hostel', 'as' => 'hostel.'], function () {
});

//Student Route
Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
});

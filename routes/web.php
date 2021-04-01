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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('', 'Dashboard\DashboardController@index')->name('teacher.index');
Route::get('teacher/create', 'Dashboard\DashboardController@create')->name('teacher.create');
Route::post('teacher/store', 'Dashboard\DashboardController@store')->name('teacher.store');
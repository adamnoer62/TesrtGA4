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

Route::get('Halaman-1', 'testdepan@halaman1')->name('halaman1');
Route::get('Halaman-2', 'testdepan@halaman2')->name('halaman2');
Route::get('Halaman-3', 'testdepan@halaman3')->name('halaman3');
Route::get('Halaman-4', 'testdepan@halaman4')->name('halaman4');

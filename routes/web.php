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

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/konsul', function () {
    return view('konsul');
})->middleware(['auth'])->name('konsul');

require __DIR__.'/auth.php';


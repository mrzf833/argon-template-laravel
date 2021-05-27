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

// ------------------- route default template argon ----------------
Route::get('login', function(){
    return view('login');
})->name('login');

Route::get('dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('register', function(){
    return view('register');
})->name('register');

Route::get('icons', function(){
    return view('icons');
})->name('icons');

Route::get('maps', function(){
    return view('maps');
})->name('maps');

Route::get('profile', function(){
    return view('profile');
})->name('profile');

Route::get('tables', function(){
    return view('tables');
})->name('tables');
// -----------------------------------------------------------------

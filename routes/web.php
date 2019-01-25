<?php

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
})->name('welcome');

Route::post('logout', 'LogoutController@logout');

Route::get('login', function() {
   return view('login');
})->name('login');

Route::get('enroll', function() {
    return view('enroll');
})->name('enroll');

Route::get('administrator', function() {
    return view('administrator');
})->name('administrator');

Route::get('member', 'memberController@index')->name('member');

Route::get('introduce/{id}', 'introduceController@index')->name('introduce');


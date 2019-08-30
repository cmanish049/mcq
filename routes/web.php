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
    return view('mcq.home');
});
Route::get('/about', function () {
    return view('mcq.about');
});
Route::get('/features', function () {
    return view('mcq.features');
});


Route::resource('questions','QuestionController');

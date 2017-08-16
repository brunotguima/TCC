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
    return view('/home');
});

Auth::routes();

Route::get('/downloads', function (){
    return view('/downloads');
});
Route::get('/sobrenos', function (){
    return view('/sobrenos');
});
Route::get('/suporte', function (){
    return view('/suporte');
});

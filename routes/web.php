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

Route::get('/', 'Usuario@cadastrar')->name('home');
Route::post('/salvar', 'Usuario@salvar')->name('salvar');

//Route::match(['get','post'], '/', ); 
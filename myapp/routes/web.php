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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sobre', 'SobreController@index')->name('sobre');
Route::get('/contato', 'ContatoController@index')->name('contato');
Route::post('/contato', 'ContatoController@enviarContato')->name('enviar_contato');





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
    return view('home');
});
Route::get('/admin', function(){
    return view('login');
});
Route::get('/admin/index', function(){
    return view('splash');
});
Route::get('/admin/index/add', 'Usuarios@index')->name('add'); //vista de agregar usuario
Route::post('/guardarUsuario', 'Usuarios@store');//Metodo para agregar usuario

Route::get('/admin/index/show', 'Usuarios@getUsers')->name('showUsr');
Route::get('/admin/index/correos', 'Correos@index')->name('mails');
Route::get('/admin/index/tickets', function(){
    return view('tickets');
});

Route::post('/guardar','contactos@store');

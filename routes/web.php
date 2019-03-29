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
Route::get('/admin/index/edit/{id}',  array('as' => 'id', 'uses' => 'Usuarios@show'));
Route::get('/admin/index/editar/{id}',  array('as' => 'id', 'uses' => 'Usuarios@editar'));
Route::get('error/{id}', function ($id) {
    return redirect('/admin/index/editar/'.$id);
});
Route::post('/admin/index/save/{id}',  array('as' => 'id', 'uses' => 'Usuarios@saveEdit'));
Route::post('/guardarUsuario', 'Usuarios@store');//Metodo para agregar usuario

Route::get('/admin/index/show', 'Usuarios@getUsers')->name('showUsr');
Route::get('/admin/index/correos', 'Correos@index')->name('mails');
Route::get('/admin/index/tickets', 'Contactos@index')->name('ticketsitos');

// Route::get('/admin/index/tickets', function(){
//     return view('tickets');
// });

Route::get('/correosCTicket', function () {
    return view('responderCorreosCT');
});

Route::post('/mostrarCorreoCTicket', 'Contactos@mostrarCorreoCTicket');

Route::get('/correosSTicket', function () {
    return view('responderCorreosST');
});

Route::post('/guardar','contactos@store'); //Metodo para agregar el mensaje del contacto

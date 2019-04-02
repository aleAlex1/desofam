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
Route::get('/admin/index/tickets', 'Contactos@index')->name('ticketsitos');

Route::post('/login', 'Usuarios@login');
Route::post('/desencriptar', 'Usuarios@desencriptar');

//INICIO TICKET
Route::post('/guardarIdTicket', 'Contactos@guardarTicket');
Route::post('/getTicket', 'Contactos@getTicket');
Route::get('/correo/{id}', function ($id) {
  // return 'id '.$id;
  return view('responderCorreosCT')->with('id', $id);
})->name('id');

Route::get('/correosCTicket', function () {
    return view('responderCorreosCT');
});
Route::post('/correoTicketPrevio', 'Contactos@mostrarCorreoTicketPrevio');
Route::post('/correoTicketActual', 'Contactos@mostrarCorreoTicketActual');
Route::get('/correosSTicket', function () {
    return view('responderCorreosST');
});
Route::post('/enviarCorreo', 'responderCorreoController@responder');
//FIN TICKET

Route::post('/guardar','contactos@store'); //Metodo para agregar el mensaje del contacto

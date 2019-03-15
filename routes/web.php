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
Route::get('/admin/index/add', function(){
    return view('add');
});
Route::get('/admin/index/show', function(){
    return view('show');
});

Route::post('/guardar','contactos@store');

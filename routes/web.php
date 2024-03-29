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
});


Route::get('/contacto/crear','GestionarContactoController@Form');

Route::POST('contacto/guardar','GestionarContactoController@Guardar');

Route::get('/contactos/listar','GestionarContactoController@listarContactos')->name('contactos');

Route::delete('/contacto/{user}', 'GestionarContactoController@borrarUsuario')->name("borrar");

Route::POST('/actualizar/{user}', 'GestionarContactoController@actualizarContacto');

Route::get('/editar/{user}','GestionarContactoController@editarContacto');




Route::get('/pais/listar','PaisController@listarpais')->name('paises');

Route::delete('/pais/{user}', 'PaisController@borrarPais')->name("bpais");

Route::get('/pais/crear','PaisController@Form');

Route::POST('pais/guardar','PaisController@Guardar');

Route::POST('pais/actualizar/{pais}', 'PaisController@actualizarPais');

Route::GET('pais/editar/{pais}','PaisController@editarPais');



















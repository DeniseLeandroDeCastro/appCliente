<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/cliente', ['uses'=>'ClienteController@index', 'as'=>'cliente.index']);
Route::get('/cliente/adicionar', ['uses'=>'ClienteController@adicionar', 'as'=>'cliente.adicionar']);

Route::post('/cliente/salvar', ['uses'=>'ClienteController@salvar', 'as'=>'cliente.salvar']);
Route::get('/cliente/editar/{id}', ['uses'=>'ClienteController@editar', 'as'=>'cliente.editar']);
Route::put('/cliente/atualizar/{id}', ['uses'=>'ClienteController@atualizar', 'as'=>'cliente.atualizar']);




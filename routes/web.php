<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();
 
Route::get('/cliente', ['uses'=>'ClienteController@index','as'=>'cliente.index']);
Route::get('/cliente/adicionar', ['uses'=>'ClienteController@adicionar','as'=>'cliente.adicionar']);
Route::post('/cliente/salvar', ['uses'=>'ClienteController@salvar','as'=>'cliente.salvar']);
Route::get('/cliente/editar/{id}', ['uses'=>'ClienteController@editar','as'=>'cliente.editar']);
Route::put('/cliente/atualizar/{id}', ['uses'=>'ClienteController@atualizar','as'=>'cliente.atualizar']);
Route::get('/cliente/deletar/{id}', ['uses'=>'ClienteController@deletar','as'=>'cliente.deletar']);
 
Route::get('/cliente/detalhe/{id}',['uses'=>'ClienteController@detalhe','as'=>'cliente.detalhe']);
Route::get('/telefone/adicionar/{id}',['uses'=>'TelefoneController@adicionar','as'=>'telefone.adicionar']);
Route::post('/telefone/salvar/{id}',['uses'=>'TelefoneController@salvar','as'=>'telefone.salvar']);
 
Route::get('/telefone/editar/{id}', ['uses'=>'TelefoneController@editar','as'=>'telefone.editar']);
Route::put('/telefone/atualizar/{id}', ['uses'=>'TelefoneController@atualizar','as'=>'telefone.atualizar']);
Route::get('/telefone/deletar/{id}', ['uses'=>'TelefoneController@deletar','as'=>'telefone.deletar']);

Route::get('telefone/adicionar/{id}', ['uses'=>'TelefoneController@adicionar', 'as'=>'telefone.adicionar']);
Route::post('telefone/salvar/{id}', ['uses'=>'TelefoneController@salvar', 'as'=>'telefone.salvar']);






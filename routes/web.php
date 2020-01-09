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

Route::get('/',['as'=>'site.login', 'uses'=>'Site\LoginController@index']);
Route::get('/login',['as'=>'site.login', 'uses'=>'Site\LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);

Route::group(['middleware'=>'auth'],function(){

    Route::get('/cliente',['as'=>'cliente.listar', 'uses'=>'PessoaController@index']);
    Route::get('/cliente/adicionar',['as'=>'cliente.adicionar', 'uses'=>'PessoaController@adicionar']);
    Route::get('/cliente/adicionar/cancelar',['as'=>'cliente.adicionar.cancelar', 'uses'=>'PessoaController@cancelar']);
    Route::get('/cliente/editar/{id}',['as'=>'cliente.editar', 'uses'=>'PessoaController@editar']);
    Route::post('/cliente',['as'=>'cliente.salvar', 'uses'=>'PessoaController@salvar']);
    Route::put('/cliente/alterar/{id}',['as'=>'cliente.alterar', 'uses'=>'PessoaController@alterar']);
    Route::get('/cliente/excluir/{id}',['as'=>'cliente.excluir', 'uses'=>'PessoaController@excluir']);
    Route::get('/login/sair',['as'=>'site.login.sair', 'uses'=>'Site\LoginController@sair']);
    Route::get('/chamado',['as'=>'chamado.listar', 'uses'=>'ChamadoController@index']);
    Route::get('/chamado/adicionar',['as'=>'chamado.adicionar', 'uses'=>'ChamadoController@adicionar']);
    Route::get('/chamado/editar/{id}',['as'=>'chamado.editar', 'uses'=>'ChamadoController@editar']);
    Route::post('/chamado/salvar',['as'=>'chamado.salvar', 'uses'=>'ChamadoController@salvar']);
    Route::put('/chamado/alterar/{id}',['as'=>'chamado.alterar', 'uses'=>'ChamadoController@alterar']);


    Route::get('/agenda',['as'=>'agenda.listar', 'uses'=>'AgendaController@index']);

    Route::get('/load-events',['as'=>'routeLoadEvents', 'uses'=>'EventController@loadEvents']);

});

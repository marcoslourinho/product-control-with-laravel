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

Route::get('/novarota', function() {
    return '<h1>Rota Modificada com Sucesso!</h1>';
});

Route::get('/produtos' , 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}' , 'ProdutoController@mostra');
Route::get('/produtos/remove/{id}' , 'ProdutoController@remove');
Route::get('/produtos/novo' , 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

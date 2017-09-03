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
// Rotas para login



// Rotas dos produtos
Route::get('/produtos', "ProdutoController@lista");

Route::get('/produtos/mostra/{id}', "ProdutoController@mostra")->where('id', '[0-9]+');

Route::get('/produtos/novo/{id?}', "ProdutoController@novo");

Route::get('/produtos/listaJson', "ProdutoController@listaJson");

Route::get('/produtos/remove/{id}', "ProdutoController@remove");

Route::post('/produtos/adiciona', "ProdutoController@adiciona");

Route::post('/produtos/editar', "ProdutoController@edita");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

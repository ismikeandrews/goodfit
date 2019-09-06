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

Route::get('/', 'Pages@home');
Route::get('/enderecos', 'Pages@enderecos');
Route::get('/usuarios/cadastro', 'Pages@usuariosCadastro');
Route::get('/niveis/cadastro', 'Pages@niveisCadastro');

//cadastrar
Route::post('/nivel/cadastrar', 'Cadastro@cadastrarNivel');
Route::post('/usuario/cadastrar', 'Cadastro@cadastrarUsuario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

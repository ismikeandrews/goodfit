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

Route::get('/loginho', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/login', 'Auth\LoginMike@showLoginForm')->name('login');
// Route::post('/login', 'Auth\LoginMike@login')->name('login.submit');

//Niveis de Usuarios
Route::prefix('nivelusuario')->group(function() {
//paginas
Route::get('/escolha', 'NivelUsuarioController@escolhaNivelUsuario');
Route::get('/cadastro', 'NivelUsuarioController@formularioNivelUsuario');
Route::get('/', 'NivelUsuarioController@niveisUsuario');
//cadastros
Route::post('/cadastro', 'NivelUsuarioController@novoNivel');
//Excluir e Editar dados e Validar
Route::get('/deletar/{codNivelUsuario}', 'NivelUsuarioController@deletarNivel');
Route::get('/validar/{codNivelUsuario}', 'NivelUsuarioController@validarNivel');
});

//Candidato
Route::prefix('candidato')->group(function() {
//paginas
Route::get('/cadastro', 'CandidatoController@formularioCandidato')->middleware('auth');
Route::get('/', 'CandidatoController@indexCandidato');
//cadastros
Route::post('/cadastro', 'CandidatoController@novoCandidato');
//Excluir e Editar dados e Validar

});

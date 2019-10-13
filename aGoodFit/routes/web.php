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



Auth::routes();

Route::get('/', 'CandidatoController@login');

Route::get('/home', 'HomeController@index')->name('home');

//Candidato
Route::prefix('candidato')->group(function() {
//Paginas
Route::get('/vagas', 'CandidatoController@paginaVagas')->middleware('auth');
Route::get('/configuracoes', 'CandidatoController@config')->middleware('auth');
//Validar e editar
Route::post('/configuracoes', 'CandidatoController@atualizarPerfil')->middleware('auth');
});

//Curriculo
Route::prefix('curriculo')->group(function() {
//Paginas
Route::get('/formulario', 'CurriculoController@formularioCurriculo')->middleware('auth');
Route::get('/status', 'CurriculoController@paginaStatus')->middleware('auth');
//Novo Curriculo
Route::post('/formulario', 'CurriculoController@novoCurriculo')->middleware('auth');
});

/******** Rotas Dashboard**********/

//Niveis de Usuarios
Route::prefix('nivelusuario')->group(function() {
//paginas
Route::get('/cadastro', 'NivelUsuarioController@formularioNivelUsuario');
Route::get('/', 'NivelUsuarioController@niveisUsuario');
//cadastros
Route::post('/cadastro', 'NivelUsuarioController@novoNivel');
//Excluir e Editar dados e Validar
Route::get('/deletar/{codNivelUsuario}', 'NivelUsuarioController@deletarNivel');
Route::get('/validar/{codNivelUsuario}', 'NivelUsuarioController@validarNivel');
});

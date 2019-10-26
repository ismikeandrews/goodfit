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
Route::get('/configuracoes', 'CandidatoController@config')->middleware('auth');
//Validar e editar
Route::post('/configuracoes', 'CandidatoController@atualizarPerfil')->middleware('auth');
});

//Curriculo
Route::prefix('curriculo')->group(function() {
//Paginas
Route::get('/formulario', 'CurriculoController@formularioCurriculo')->middleware('auth');
//Novo Curriculo
Route::post('/formulario', 'CurriculoController@novoCurriculo')->middleware('auth');
});

//Status
Route::prefix('status')->group(function(){
//paginas
Route::get('/', 'StatusController@index')->middleware('auth');
//Novo Status
Route::get('/{codVaga}', 'StatusController@novoStatus')->middleware('auth');
});

//Endereco
Route::prefix('endereco')->group(function() {
//Paginas
Route::get('/formulario', 'EnderecoController@formularioEnderecoCand')->middleware('auth');

//Novo endereco
Route::post('/formulario', 'EnderecoController@novoEndereco')->middleware('auth');
});

//Candidato
Route::prefix('candidato')->group(function() {
//paginas
Route::get('/configuracoes', 'CandidatoController@config')->middleware('auth');
Route::post('/configuracoes', 'CandidatoController@atualizarPerfil');
//Excluir e Editar dados e Validar
});

//Vagas
Route::prefix('vagas')->group(function() {
//paginas
Route::get('/', 'VagaController@paginaVagas')->middleware('auth');
//Excluir e Editar dados e Validar
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

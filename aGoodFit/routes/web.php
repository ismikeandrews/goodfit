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


//Rotas de autenticação
Auth::routes();


Route::get('/', 'CandidatoController@login');

//Candidato
Route::prefix('candidato')->group(function() {
//paginas
Route::get('/configuracoes', 'CandidatoController@index')->middleware('auth');
//Excluir e Editar dados e Validar
Route::post('/configuracoes', 'CandidatoController@atualizarPerfil')->middleware('auth');
});

Route::get('/home', 'HomeController@index');
//Candidatura
Route::prefix('candidatura')->group(function(){
//paginas
Route::get('/', 'StatusController@index')->middleware('auth');
//Nova Candidatura
Route::get('/{codVaga}', 'CandidaturaController@novaCandidatura')->middleware('auth');
//Excluir candidatura
Route::get('/delete/{codVaga}', 'CandidaturaController@excluirCandidatura')->middleware('auth');
});

//Curriculo
Route::prefix('curriculo')->group(function() {
	//Paginas
	Route::get('/formulario', 'CurriculoController@index')->middleware('auth');

	//Ver Curriculo
	Route::post('/view', 'CurriculoController@verCurriculo')->middleware('auth');

	//Novo Curriculo
	Route::post('/formulario', 'CurriculoController@novoCurriculo')->middleware('auth');

	//Editar Curriculo
	Route::get('/formulario/editar', 'CurriculoController@viewEditar')->middleware('auth');
	Route::post('/formulario/editar', 'CurriculoController@atualizarCurriculo')->middleware('auth');

	//Downloads
	Route::get('/pdf', 'CurriculoController@downloadTexto')->name('pdf');
});

//Endereco
// Route::prefix('endereco')->group(function() {
//Paginas
// Route::get('/formulario', 'EnderecoController@index')->middleware('auth');
//Novo endereco
// Route::post('/formulario', 'EnderecoController@novoEndereco')->middleware('auth');
// });

//Usuario
Route::prefix('usuario')->group(function() {
//paginas
Route::get('/formulario', 'UsuarioController@index');
//Excluir e Editar dados e Validar
});

//Vagas
Route::prefix('vagas')->group(function() {
	//paginas
	Route::get('/cadastro', 'VagaController@formularioVaga');
	Route::get('/', 'VagaController@index')->middleware('auth');
	//Excluir e Editar dados e Validar
	Route::post('/cadastro', 'VagaController@novaVaga');
});

/******** Rotas Dashboard**********/
//Niveis de Usuarios
Route::prefix('nivelusuario')->group(function() {
//paginas
Route::get('/cadastro', 'NivelUsuarioController@formularioNivelUsuario');
Route::get('/', 'NivelUsuarioController@niveisUsuario')->middleware('auth');
//cadastros
Route::post('/cadastro', 'NivelUsuarioController@novoNivel');
//Excluir e Editar dados e Validar
Route::get('/deletar/{codNivelUsuario}', 'NivelUsuarioController@deletarNivel')->middleware('auth');
Route::get('/validar/{codNivelUsuario}', 'NivelUsuarioController@validarNivel');
});

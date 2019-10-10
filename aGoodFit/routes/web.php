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
//Curriculo
Route::prefix('curriculo')->group(function() {

Route::post('/formulario', 'CurriculoController@novoCurriculo')->middleware('auth');
Route::get('/formulario', 'CurriculoController@formularioCurriculo')->middleware('auth');
Route::get('/status', 'CurriculoController@paginaStatus');


//Excluir e Editar dados e Validar

});
//Candidato
Route::prefix('candidato')->group(function() {
//paginas
Route::get('/vagas', 'CandidatoController@paginaVagas')->middleware('auth');
Route::get('/configuracoes', 'CandidatoController@config')->middleware('auth');
Route::post('/configuracoes', 'CandidatoController@atualizarPerfil');



//Excluir e Editar dados e Validar

});

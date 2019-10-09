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




/* Rota feita para testes da Cyntia, trocar link depois */
Route::get('/vagas', function () {
    return view('vagas');
});
Route::get('/status', function () {
    return view('status');
});





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

//Candidato
Route::prefix('candidato')->group(function() {
//paginas
Route::get('/configuracoes', 'CandidatoController@config')->middleware('auth');
Route::post('/configuracoes', 'CandidatoController@atualizarPerfil');
// Comentado só para testes, descomentar depois
Route::get('/curriculo', 'CandidatoController@formularioCurriculo');
// Route::get('/curriculo', 'CandidatoController@formularioCurriculo')->middleware('auth');

//Excluir e Editar dados e Validar

});

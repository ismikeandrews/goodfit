<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('nivel-usuario')->group(function() {
    Route::get('/', 'NivelUsuarioController@getAll');
    Route::get('/{codNivelUsuario}', 'NivelUsuarioController@getUsuarioById');
    Route::post('/register', 'NivelUsuarioController@novoNivel');
    Route::delete('/delete/{codNivelUsuario}', 'NivelUsuarioController@deletarNivel');
});
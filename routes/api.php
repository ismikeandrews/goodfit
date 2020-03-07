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
    Route::middleware('cors')->get('/', 'NivelUsuarioController@getAll');
    Route::middleware('cors')->get('/{codNivelUsuario}', 'NivelUsuarioController@getUsuarioById');
    Route::middleware('cors')->post('/register', 'NivelUsuarioController@novoNivel');
    Route::middleware('cors')->delete('/delete/{codNivelUsuario}', 'NivelUsuarioController@deletarNivel');
});
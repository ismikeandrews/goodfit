<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelUsuario;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\NivelUsuarioService;

class NivelUsuarioController extends Controller
{
  /**
  * Function to register a new type of user.
  *
  * @param $request parameter 
  *
  * @return json response
  *
  * @author Michael Andrews
  **/
  public function novoNivel(Request $request){
    $request->body;
    $this->validate($request, ['nomeNivelUsuario' => 'required|unique:tbNivelUsuario,nomeNivelUsuario',]);

    try {
      $nivelUsuario = NivelUsuario::create(['nomeNivelUsuario' => $request->input('nomeNivelUsuario'),]);
      $salvar = $nivelUsuario->save();

      if ($salvar) {
        return response()->json('A new user type has successfuly been created.', 201);
      } else {
        throw new \Exception('An error accured during the process, please check your data and try again.');
      }
    } catch (\Exception $error) {
      echo $error;
      return response()->json($error->getMessage(), 400);
    }
  }

  /**
  * Function to get a type of user by id.
  *
  * @param $codNivelUsuario user's type id 
  *
  * @return $nivelUsuario collection
  *
  * @author Michael Andrews
  **/
  public function getUsuarioById(int $codNivelUsuario){
    try {
      $nivelUsuario = NivelUsuario::where('codNivelUsuario', $codNivelUsuario)->get();
      if ($nivelUsuario) {
        return NivelUsuarioService::collection($nivelUsuario);
      }else{
        throw new \Exception("Sorry, the user type you were looking for was not found");
      }
    } catch (\Exception $error) {
      echo $error;
      return response()->json($error->getMessage(), 404);
    }
  }

  /**
  * Function to delete a type of user with an id
  *
  * @param $codNivelUsuario user's type id 
  *
  * @return json response
  *
  * @author Michael Andrews
  **/
  public function deletarNivel(int $codNivelUsuario){
    try {
      $response = NivelUsuario::where('codNivelUsuario', $codNivelUsuario);
      if ($response) {
        $response->delete();
        return response()->json('The user requested has been deleted', 200);
      }else{
        throw new \Exception("Sorry, the user type you were looking for was not found");
      }
    } catch (\Exception $error) {
      echo $error;
      return response()->json($error->getMessage(), 404);
    }
  }

  /**
  * Function to get all users types
  *
  * @return $nivelUsuario collection
  * 
  * @author Michael Andrews
  **/
  public function getAll(){
    try {
      $niveisUsuario = NivelUsuario::all();

      if ($niveisUsuario) {
        return NivelUsuarioService::collection($niveisUsuario);
      }else{
        throw new \Exception("Sorry, no users type were found");
      }
    } catch (\Exception $error) {
      echo $error;
      return response()->json($error->getMessage(), 404);
    }  
  }
}

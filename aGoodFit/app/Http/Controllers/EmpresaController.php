<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
  /**
  * Função para cadastrar uma Empresa
  *
  * @param array $data array com os dados do formulario
  * @param int $codUsuario id do usuario recem cadastrado
  *
  * @author Michael Andrews
  **/
  public function novaEmpresa(array $data, int $codUsuario){
    $cnpj = $data['cnpj'];
    $regex = '/[^0-9]/';
    $cnpj = preg_replace($regex, '', $cnpj);

   Candidato::create([
     'nomeFantasiaEmpresa' => $data['nomeFantasiaEmpresa'],
     'razaoSocialEmpresa' => $cnpj,
     'cnpjEmpresa' => $data['cnpjEmpresa'],
     'codUsuario' => $codUsuario
   ]);
  }

	/**
    * Função para pegar empresa por codigo
    *
    * @param $codEmpresa codigo da empresa
    *
    * @author Vanessa Amaral Marques
    **/
    public function getEmpresaByCod(int $codEmpresa){
    	return DB::table('tbEmpresa')
        ->select('tbEmpresa.nomeFantasiaEmpresa')
        ->where('tbEmpresa.codEmpresa', '=', $codEmpresa)
        ->first();
    }
}

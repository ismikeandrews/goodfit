<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    /**
    * Função para cadastrar uma Empresa
    *
    * @param array $data array com os dados do formulario
    * @param int $codUsuario id do usuario recem cadastrado
    * @author Michael Andrews
    * @author Vanessa Amaral Marques
    **/
    public function novaEmpresa(array $data, int $codUsuario){
        try {
            $candidato = Candidato::create([
                'nomeFantasiaEmpresa' => $data['nomeFantasiaEmpresa'],
                'razaoSocialEmpresa'  => $this->validaCnpj($data['cnpj']),
                'cnpjEmpresa'         => $data['cnpjEmpresa'],
                'codUsuario'          => $codUsuario
            ]);

            if ( ! $candidato->save() ) {
                throw new \Exception('Erro ao cadastrar empresa');
            }
        } catch (\Exception $e) {
            response()->json($e->getMessage(), 503);
        }
    }

    /**
     * Retorna uma empresa por codigo
     *
     * @param int $codEmpresa codigo da empresa
     * @return Model|Builder|object|null
     * @author Vanessa Amaral Marques
     */
    public function getEmpresaByCod(int $codEmpresa){
        $empresa = DB::table('tbEmpresa')
        ->select('tbEmpresa.nomeFantasiaEmpresa')
        ->where('tbEmpresa.codEmpresa', '=', $codEmpresa)
        ->first();

        return response()->json($empresa);
    }

    /**
     * Valida cnpj
     *
     * @param string $cnpj
     * @return string|string[]|null
     */
    private function validaCnpj(string $cnpj){
        return preg_replace('/[^0-9]/', '', $cnpj);
    }
}

<?php

namespace App\Http\Controllers;

use App\AdicionalCurriculo;
use App\NivelUsuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdicionalController extends Controller
{
    /**
     * Cadastra um novo adicional
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     * @author Vanessa Amaral Marques
     */
    public function cadastroAdicional(Request $request){
    	$this->validate($request, [
    		'nomeAdicional' => 'required|max:100|string',
    		'grauAdicional' => 'required|integer',
    		'codTipoAdicional' => 'required|integer'
    	]);

    	try{
            $adicional = Adicional::create([
                'nomeAdicional' => $request->input('nomeAdicional'),
                'grauAdicional' => $request->input('grauAdicional'),
                'codTipoAdicional' => $request->input('codTipoAdicional')
            ]);

            if ( $adicional->save() ) {
                return response()->json('Adicional criado com sucesso', 200);
                die;
            }

            throw new \Exception('Erro ao tentar criar um adicional');
    	} catch (\Exception $e) {
    	    return response()->json($e->getMessage(), 503);
        }
    }

    /**
     * Função para pegar todos os adicionais
     * pelo nome do tipo
     *
     * @param string $nomeTipoAdicional
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     */
    public function getAdicionalByNomeTipoAdicional(string $nomeTipoAdicional){
        $adicionais = DB::table('tbAdicional')
          ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
          ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
          ->where('tbTipoAdicional.nomeTipoAdicional', '=', $nomeTipoAdicional)
          ->orderBy('tbAdicional.grauAdicional', 'ASC')
          ->get();

        return response()->json($adicionais, 200);
    }

    /**
     * Função para pegar todos os adicionais
     * pelo nome do tipo e cod do curriculo
     *
     * @param string $nomeTipoAdicional
     * @param int $codCurriculo
     * @return JsonResponse
     */
    public function getAdicionalByNomeTipoAndCurriculo(string $nomeTipoAdicional, int $codCurriculo){
        $adicionais = DB::table('tbAdicional')
          ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
          ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
          ->join('tbAdicionalCurriculo', 'tbAdicional.codAdicional', '=', 'tbAdicionalCurriculo.codAdicional')
          ->where('tbTipoAdicional.nomeTipoAdicional', $nomeTipoAdicional)
          ->where('tbAdicionalCurriculo.codCurriculo', $codCurriculo)
          ->first();

        return response()->json($adicionais, 200);
    }

    /**
     * Função para cadastrar um adicional em
     * um currículo
     *
     * @param int $codAdicional codigo do adicional
     * @param int $codCurriculo codigo do curriculo
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     */
    public function novoAdicionalCurriculo(int $codAdicional, int $codCurriculo){
      try {
          $adicional = AdicionalCurriculo::create([
              'codAdicional' => $codAdicional,
              'codCurriculo' => $codCurriculo,
          ]);

          if ( ! $adicional->save() ) {
              throw new \Exception('Erro ao cadastrar adicional em currículo');
          }
      } catch ( \Exception $e ) {
          return response()->json($e->getMessage(), 503);
      }
    }

    /**
     * Função para remover adicionais de um currículo pelo tipo
     *
     * @param int $codTipoAdicional codigo do tipo do adicional
     * @param int $codCurriculo codigo do curriculo
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     */
    public function removerAdicionalCurriculo(int $codTipoAdicional, int $codCurriculo){
        try {
            $delete = DB::table('tbAdicionalCurriculo')
                ->join('tbAdicional', 'tbAdicionalCurriculo.codAdicional', '=', 'tbAdicional.codAdicional')
                ->where('tbAdicional.codTipoAdicional', '=', $codTipoAdicional)
                ->where('tbAdicionalCurriculo.codCurriculo', '=', $codCurriculo)
                ->delete();

            if ( $delete ) {
                return response()->json('Adicional removido com sucesso', 200);
                die;
            }

            throw new \Exception('Erro ao tentar remover adicional de currículo');
        } catch ( \Exception $e ) {
            return response()->json($e->getMessage(), 503);
        }
    }
}

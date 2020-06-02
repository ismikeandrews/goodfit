<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use Illuminate\Support\Facades\DB;

class EnderecoController extends Controller
{
  /**
  * Função para cadastrar um endereco
  *
  * @param array $data array com os dados do formulario
  *
  * @author Michael Andrews
  **/
  public function novoEndereco(array $data)
  {
    $cep = $data['cep'];
    $regex = '/[^0-9]/';
    $cep = preg_replace($regex, '', $cep);

    $endereco = Endereco::create([
      'cepEndereco' => $cep,
      'logradouroEndereco' => $data['logradouro'],
      'numeroEndereco' => $data['numero'],
      'complementoEndereco' => $data['complemento'],
      'bairroEndereco' => $data['bairro'],
      'zonaEndereco' => $data['zona'],
      'cidadeEndereco' => $data['cidade'],
      'estadoEndereco' => $data['estado'],
    ]);
    return $endereco->codEndereco;
  }
}

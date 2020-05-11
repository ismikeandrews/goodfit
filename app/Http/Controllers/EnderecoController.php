<?php

namespace App\Http\Controllers;

use App\Endereco;

class EnderecoController extends Controller
{
    /**
     * Função para cadastrar um endereco
     *
     * @param array $data array com os dados do formulario
     * @return int $codEndereco
     * @author Michael Andrews
     * @author Vanessa Amaral Marques
     */
    public function novoEndereço(array $data){
        $endereco = Endereco::create([
          'cepEndereco'         => $this->validaCep($data['cep']),
          'logradouroEndereco'  => $data['logradouro'],
          'numeroEndereco'      => $data['bairro'],
          'complementoEndereco' => $data['complemento'],
          'bairroEndereco'      => $data['bairro'],
          'zonaEndereco'        => $data['zona'],
          'cidadeEndereco'      => $data['cidade'],
          'estadoEndereco'      => $data['estado'],
        ]);

        return $endereco->codEndereco;
    }

    /**
     * Valida um CEP
     *
     * @param string $cep
     * @return string|string[]|null
     * @author Vanessa Amaral Marques
     */
    private function validaCep(string $cep){
        return preg_replace('/[^0-9]/', '', $cep);
    }
}

package br.com.projeto.test;

import java.sql.Connection;

import br.com.projeto.conexao.Conexao2;

//faça o teste de sua conexão ultilizando essa classe

public class TesteConexao {

	public static void main(String[] args)throws Exception{
		Connection c = new Conexao2().getConexao();
		System.out.println("Conexão feita");
		c.close();
	}

}

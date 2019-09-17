package br.com.projeto.test;

import java.sql.Connection;

import br.com.projeto.conexao.Conexao2;

//Aula 4
public class TesteConexao {

	public static void main(String[] args) {
		Connection minhaConexao = null;
		try {
			minhaConexao = Conexao2.getConexao();
			 System.out.println("conectou");
		}catch(Exception e){
			e.printStackTrace();
		}finally {
			try {
				minhaConexao.close();	
			}catch(Exception e) {
				e.printStackTrace();	
			}
		}

	}
}
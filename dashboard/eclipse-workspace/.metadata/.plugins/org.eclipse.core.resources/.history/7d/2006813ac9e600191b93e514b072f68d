package br.com.projeto.conexao;

import java.sql.Connection;
import java.sql.DriverManager;

//Conexao ultilizando mysql localhost cada maquina tem uma conexao diferente, certifique-se da sua

public class Conexao2 {
	public static Connection getConexao() throws Exception{
		return DriverManager.getConnection(
				"jdbc:mysql://localhost:8889/fiap", "root", "root" //altere aqui
				);
	}
}

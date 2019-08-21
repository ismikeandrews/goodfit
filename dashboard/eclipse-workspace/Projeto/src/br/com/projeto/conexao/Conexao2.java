package br.com.projeto.conexao;

import java.sql.Connection;
import java.sql.DriverManager;

public class Conexao2 {
	public static Connection getConexao() throws Exception{
		return DriverManager.getConnection(
				"jdbc:oracle:thin:@oracle.fiap.com.br:1521:ORCL",
				"rm82443",
				"fiap"
				);
	}
}

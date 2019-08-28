package br.com.projeto.conexao;

import java.sql.Connection;
import java.sql.DriverManager;

public class Conexao2 {
	public static Connection getConexao() throws Exception{
		return DriverManager.getConnection(
				"jdbc:mysql://localhost/cliente", "root", "root"
				);
	}
}

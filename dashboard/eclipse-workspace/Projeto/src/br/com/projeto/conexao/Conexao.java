package br.com.projeto.conexao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import javax.swing.JOptionPane;

//Isso e um teste
public class Conexao {

	public static void main(String[] args) {
		try {
			Connection c = DriverManager.getConnection
					("jdbc:mysql://localhost:8889/fiap", "root", "root");
//					("jdbc:oracle:thin:@oracle.fiap.com.br:1521:ORCL","x","fiap"); Coloque seu rm no lugar do x
			PreparedStatement stmt = (PreparedStatement) c.prepareStatement
					("select * from DDD_TB_LOGIN where NM_USUARIO =? AND NM_SENHA =?");
			
			String login = JOptionPane .showInputDialog("Digite o login");
			String senha = JOptionPane.showInputDialog("Digite a senha");
			
			stmt.setString(1, login);
			stmt.setString(2, senha);
			
			ResultSet rs = stmt.executeQuery
			();
			
			if(rs.next()) {
				System.out.println("Logado com sucesso");
			}else {
				System.out.println("Acesso nao permitido");
			}
			
			System.out.println("Abriu");
			}
		
			catch(Exception e){
				e.getStackTrace();
			}

	}

}

package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.NivelUsuario;
import br.com.projeto.conexao.Conecta;


public class NivelUsuarioDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;
	
	public NivelUsuarioDAO() throws Exception{
		con = Conecta.getConnection();
	}
	
	public NivelUsuario todosNivelUsuario() throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("select * from tbNivelUsuario");
		rs = stmt.executeQuery();
		
		if(rs.next()) {
			return new NivelUsuario(
					rs.getInt("codNivelUsuario"),
					rs.getString("nomeNivelUsuario")
					);
		}else {
			return new NivelUsuario();
		}
	}
	
	
	
	public NivelUsuario getNivelUsuario(int cod) throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("select * from tbNivelUsuario where codNivelUsuario=?");
		stmt.setInt(1, cod);
		rs = stmt.executeQuery();
		
		if(rs.next()) {
			return new NivelUsuario(
					rs.getInt("codNivelUsuario"),
					rs.getString("nomeNivelUsuario")
					);
		}else {
			return new NivelUsuario();
		}
	}
	
	public int addNivelUsuario(NivelUsuario nu) throws Exception{
		stmt = con.prepareStatement
				("INSERT INTO tbNivelUsuario (nomeNivelUsuario) VALUES (?)");
		stmt.setString(1, nu.getNome());

		
		return stmt.executeUpdate();
	}
	
	public int deleteNivelUsuario(int cod) throws Exception{
		
		stmt = con.prepareStatement
				("delete from tbNivelUsuario where codNivelUsuario=?");
		stmt.setInt(1, cod);
		return rs.getInt("codNivelUsaurio");
	}
	
	public int atualizar(int cod, String nome) throws Exception{
		stmt = con.prepareStatement
				("update tbNivelUsuario set nomeNivelUsuario = ? where codNivelUsuario = ?");
		stmt.setInt(1, cod);
		stmt.setString(1, nome);
		return stmt.executeUpdate();
	}
	
	public void fechar() throws Exception{
		con.close();
	}
}
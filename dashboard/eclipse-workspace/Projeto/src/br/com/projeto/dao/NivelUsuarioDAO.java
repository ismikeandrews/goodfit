package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.NivelUsuario;
import br.com.projeto.conexao.Conexao2;

public class NivelUsuarioDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;
	
	public NivelUsuarioDAO() throws Exception{
		con = Conexao2.getConexao();
	}
	
	
	
	public NivelUsuario getNivelUsuario(int cod) throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("select * from tbNivelUsuario where codNivelUsuario=?");
		stmt.setInt(1, cod);
		rs = stmt.executeQuery();
		
		if(rs.next()) {
			return new NivelUsuario(
					rs.getInt("codUsuario"),
					rs.getString("loginUsuario"),
					rs.getString("senhaUsuario")
					);
		}else {
			return new NivelUsuario();
		}
	}
	
	public int addNivelUsuario(NivelUsuario nu) throws Exception{
		stmt = con.prepareStatement
				("INSERT INTO tbNivelUsuario (codNivelUsuario, nomeNivelUsuario, descricaoNivelUsuario) VALUES (?,?,?)");
		stmt.setInt(1, nu.getCodigo());
		stmt.setString(2, nu.getNome());
		stmt.setString(3, nu.getDescricao());
		
		return stmt.executeUpdate();
	}
	
	public int deleteNivelUsuario(int cod) throws Exception{
		
		stmt = con.prepareStatement
				("delete from tbNivelUsuario where codNivelUsuario=?");
		stmt.setInt(1, cod);
		return stmt.executeUpdate();
	}
	
	public void fechar() throws Exception{
		con.close();
	}

}

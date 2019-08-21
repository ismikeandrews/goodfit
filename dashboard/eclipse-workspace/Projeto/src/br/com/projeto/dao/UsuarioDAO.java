package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.Usuario;
import br.com.projeto.conexao.Conexao2;

public class UsuarioDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;
	
	public UsuarioDAO() throws Exception{
		con = Conexao2.getConexao();
	}
	
	public Usuario getUsuario(int cod) throws Exception{
		stmt = con.prepareStatement
				("select * from DDD_TB_LOGIN where CD_USUARIO=?");
		stmt.setInt(1, cod);
		rs = stmt.executeQuery();
		
		if(rs.next()) {
			return new Usuario(
					rs.getInt("CD_USUARIO"),
					rs.getString("NM_USUARIO"),
					rs.getInt("CD_ENDERECO"),
					rs.getInt("CD_CONTATO"),
					rs.getString("NM_LOGIN"),
					rs.getString("NM_SENHA"),
					rs.getString("NM_TIPO")
					);
		}else {
			return new Usuario();
		}
	}
	
	public int delete(int cod) throws Exception{
		
		stmt = con.prepareStatement
				("delete from DDD_TB_LOGIN where CD_USUARIO=?");
		stmt.setInt(1, cod);
		return stmt.executeUpdate();
	}
	
	public void fechar() throws Exception{
		con.close();
	}
	
}

package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.Usuario;
import br.com.projeto.conexao.Conecta;

public class UsuarioDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;
	
	public UsuarioDAO() throws Exception{
		con = Conexao.getConnection();
	}
	
	public Usuario getUsuario(int cod) throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("SELECT * FROM tbUsuario WHERE codUsuario=?");
		stmt.setInt(1, cod);
		rs = stmt.executeQuery();
		
		if(rs.next()) {
			return new Usuario(
					rs.getInt("codUsuario"),
					rs.getString("loginUsuario"),
					rs.getString("password"),
					rs.getString("email"),
					new NivelUsuarioDAO().getNivelUsuario(rs.getInt("codNivelUsuario")),
					new EnderecoDAO().getEndereco(rs.getInt("codEndereco"))
					);
		}else {
			return new Usuario();
		}
	}
	
	public Usuario getUsuarioByEmail(String email) throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("SELECT * FROM tbUsuario WHERE email = ?");
		stmt.setString(1, email);
		rs = stmt.executeQuery();
		
		if( rs.next() ){
			return new Usuario(
				rs.getInt("codUsuario"),
				rs.getString("loginUsuario"),
				rs.getString("password"),
				rs.getString("email"),
				new NivelUsuarioDAO().getNivelUsuario(rs.getInt("codNivelUsuario")),
				new EnderecoDAO().getEndereco(rs.getInt("codEndereco"))
			);
		}else{
			return new Usuario();
		}
	}
	
	public int addUsuario(Usuario usu) throws Exception{
		stmt = con.prepareStatement
				("INSERT INTO tbUsuario (loginUsuario, password, email, codNivelUsuario, codEndereco) VALUES (?,?,?,?,?)");
		stmt.setString(1, usu.getLogin());
		stmt.setString(2, usu.getSenha());
		stmt.setString(3, usu.getEmail());
		stmt.setInt(4, usu.getNivel().getCodigo());
		stmt.setInt(5, usu.getEndereco().getCodigo());
		
		return stmt.executeUpdate();
	}
	
	public int deleteUsuario(int cod) throws Exception{
		
		stmt = con.prepareStatement
				("DELETE FROM tbUsuario WHERE codUsuario=?");
		stmt.setInt(1, cod);
		return stmt.executeUpdate();
	}
	
	public void fechar() throws Exception{
		con.close();
	}
	
}

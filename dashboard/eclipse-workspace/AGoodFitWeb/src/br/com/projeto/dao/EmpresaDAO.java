package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.Empresa;
import br.com.projeto.beans.Usuario;
import br.com.projeto.conexao.Conecta;

public class EmpresaDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;

	public EmpresaDAO() throws Exception{
		con = Conecta.getConnection();
	}
	
	public Empresa getEmpresa(int cod) throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("SELECT * FROM tbEmpresa WHERE codUsuario=?");
		stmt.setInt(1, cod);
		rs = stmt.executeQuery();
	
		if(rs.next()) {
			UsuarioDAO usuarioDAO = new UsuarioDAO();
			Usuario usuario = usuarioDAO.getUsuario(rs.getInt("codUsuario"));
			
			return new Empresa(
				usuario.getCodUsuario(),
				usuario.getLogin(),
				usuario.getSenha(),
				usuario.getEmail(),
				usuario.getNivel(),
				usuario.getEndereco(),
				rs.getInt("codEmpresa"),
				rs.getString("razaoSocialEmpresa"),
				rs.getString("nomeFantasiaEmpresa"),
				rs.getString("cnpjEmpresa"),
				usuario
				);
		}else {
			return new Empresa();
		}
	}
}
package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.Endereco;
import br.com.projeto.conexao.Conexao2;

public class EnderecoDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;
	
	public EnderecoDAO() throws Exception{
		con = Conexao2.getConexao();
	}
	
	
	
	public Endereco getEndereco(int cod) throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("select * from tbEndereco where codEndereco=?");
		stmt.setInt(1, cod);
		rs = stmt.executeQuery();
		
		if(rs.next()) {
			return new Endereco(
					rs.getInt("codEndereco"),
					rs.getString("logradouroEndereco"),
					rs.getString(""),
					rs.getString("senhaUsuario"),
					);
		}else {
			return new Endereco();
		}
	}
	
	public int addEndereco(Endereco en) throws Exception{
		stmt = con.prepareStatement
				("INSERT INTO tbEndereco (codEndereco, lougradouroEndereco, numeroEndereco, complementoEndereco, cepEndereco, bairroEndereco, zona) VALUES (?,?,?)");
		stmt.setInt(1, en.getCodigo());
		stmt.setString(2, en.getNome());
		stmt.setString(3, en.getDescricao());
		
		return stmt.executeUpdate();
	}
	
	public int deleteEndereco(int cod) throws Exception{
		
		stmt = con.prepareStatement
				("delete from tbNivelUsuario where codNivelUsuario=?");
		stmt.setInt(1, cod);
		return stmt.executeUpdate();
	}
	
	public void fechar() throws Exception{
		con.close();
	}
}

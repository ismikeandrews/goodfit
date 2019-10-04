package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.Endereco;
import br.com.projeto.conexao.Conecta;
import br.com.projeto.conexao.Conecta;

public class EnderecoDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;
	
	public EnderecoDAO() throws Exception{
		con = Conecta.getConnection();
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
					rs.getString("numeroEndereco"),
					rs.getString("complementoEndereco"),
					rs.getString("cepEndereco"),
					rs.getString("bairroEndereco"),
					rs.getString("zonaEndereco"),
					rs.getString("cidadeEndereco"),
					rs.getString("estadoEndereco")
					);
		}else {
			return new Endereco();
		}
	}
	
	public int addEndereco(Endereco en) throws Exception{
		stmt = con.prepareStatement
				("INSERT INTO tbEndereco (codEndereco, lougradouroEndereco, numeroEndereco, complementoEndereco, cepEndereco, bairroEndereco, zonaEndereco, cidadeEndereco, estadoEndereco) VALUES (?,?,?,?,?,?,?,?,?)");
		stmt.setInt(1, en.getCodigo());
		stmt.setString(2, en.getLougradouro());
		stmt.setString(3, en.getNumero());
		stmt.setString(4, en.getComplemento());
		stmt.setString(5, en.getCep());
		stmt.setString(6, en.getBairro());
		stmt.setString(7, en.getZona());
		stmt.setString(8, en.getCidade());
		stmt.setString(9, en.getEstado());
		
		return stmt.executeUpdate();
	}
	
	public int deleteEndereco(int cod) throws Exception{
		
		stmt = con.prepareStatement
				("delete from tbEndereco where codEndereco=?");
		stmt.setInt(1, cod);
		return stmt.executeUpdate();
	}
	
	public void fechar() throws Exception{
		con.close();
	}
}

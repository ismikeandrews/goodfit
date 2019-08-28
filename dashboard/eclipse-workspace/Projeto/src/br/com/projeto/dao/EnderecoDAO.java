package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.Endereco;
import br.com.projeto.conexao.Conexao2;

public class EnderecoDAO {
	
	public Endereco getEndereco(int lougradouro) throws Exception{
		Connection c = (Connection) Conexao2.getConexao();
		PreparedStatement stmt = (PreparedStatement) c.prepareStatement
				("select * from DDD_TB_LOGIN where CD_ENDERECO=?");
		stmt.setInt(1, lougradouro);
		ResultSet rs = stmt.executeQuery();
		
		if(rs.next()) {
			return new Endereco(
					rs.getString("NM_LOUGRADOURO"),
					rs.getString("NM_CEP"),
					rs.getString("NM_NUMERO"),
					rs.getString("NM_COMPLEMENTO"),
					rs.getString("NM_CIDADE"),
					rs.getString("NM_UF"),
					rs.getString("NM_BAIRRO")
					);
		}else {
			return new Endereco();
		}
	}
}

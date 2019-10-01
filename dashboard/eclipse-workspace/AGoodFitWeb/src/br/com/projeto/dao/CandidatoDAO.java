package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.Candidato;
import br.com.projeto.conexao.Conecta;

public class CandidatoDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;
	
	public CandidatoDAO() throws Exception{
		con = Conecta.getConnection();
	}
	
	public Candidato getCandidato(int codCandidato) throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("SELECT * FROM tbCandidato WHERE codCandidato=?");
		stmt.setInt(1, codCandidato);
		rs = stmt.executeQuery();
		
		if(rs.next()) {
			UsuarioDAO usuario = new UsuarioDAO();
			
			return new Candidato(
					rs.getInt("codUsuario"),
					usuario.getUsuario(rs.getInt("codUsuario")).getLogin(),
					usuario.getUsuario(rs.getInt("codUsuario")).getSenha(),
					usuario.getUsuario(rs.getInt("codUsuario")).getEmail(),
					usuario.getUsuario(rs.getInt("codUsuario")).getNivel(),
					usuario.getUsuario(rs.getInt("codUsuario")).getEndereco(),
					rs.getInt("codCandidato"),
					rs.getString("nome"),
					rs.getString("cpf"),
					rs.getString("rg"),
					rs.getString("dataNasc"),
					rs.getString("descricao"),
					usuario.getUsuario(rs.getInt("codUsuario"))
					);
		}else {
			return new Candidato();
		}
	}
	
	public int addCandidato(Candidato cand) throws Exception{
		stmt = con.prepareStatement
				("INSERT INTO tbCandidato (codCandidato, nome, cpf, rg, dataNasc, descricao, codUsuario) VALUES (?,?,?,?,?,?,?)");
		stmt.setInt(1, cand.getCodCandidato());
		stmt.setString(2, cand.getNome());
		stmt.setString(3, cand.getCpf());
		stmt.setString(4, cand.getRg());
		stmt.setString(5, cand.getDataNasc());
		stmt.setString(6, cand.getDescricao());
		stmt.setInt(7, cand.getUsuario().getCodUsuario());
		
		return stmt.executeUpdate();
	}
	
	public int deleteCandidato(int codCandidato) throws Exception{
		
		stmt = con.prepareStatement
				("DELETE FROM tbCandidato WHERE codCandidato=?");
		stmt.setInt(1, codCandidato);
		return stmt.executeUpdate();
	}
	
	public void fechar() throws Exception{
		con.close();
	}
	
}

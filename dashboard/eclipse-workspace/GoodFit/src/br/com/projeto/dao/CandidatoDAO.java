package br.com.projeto.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import br.com.projeto.beans.Candidato;
import br.com.projeto.beans.Usuario;
import br.com.projeto.conexao.Conexao;
/*
 * @author Cyntia RM82273
 * 
 */
public class CandidatoDAO {
	private Connection con;
	private PreparedStatement stmt;
	private ResultSet rs;
	
	public CandidatoDAO() throws Exception{
		con = Conexao.getConnection();
	}
	
	public Candidato getCandidato(int codCandidato) throws Exception{
		stmt = (PreparedStatement) con.prepareStatement
				("SELECT * FROM tbCandidato WHERE codCandidato=?");
		stmt.setInt(1, codCandidato);
		rs = stmt.executeQuery();
		
		if(rs.next()) {

			UsuarioDAO usuarioDAO = new UsuarioDAO();
			Usuario usuario = usuarioDAO.getUsuario(rs.getInt("codUsuario"));
			
			
			return new Candidato(
					usuario.getCodUsuario(),
					usuario.getLogin(),
					usuario.getSenha(),
					usuario.getEmail(),
					usuario.getNivel(),
					usuario.getEndereco(),
					rs.getInt("codCandidato"),
					rs.getString("nome"),
					rs.getString("cpf"),
					rs.getString("rg"),
					rs.getString("dataNasc"),
					rs.getString("descricao"),
					new UsuarioDAO().getUsuario(rs.getInt("codUsuario"))
					);
		}else {
			return new Candidato();
		}
	}
	
	public int addCandidato(Candidato cand) throws Exception{
		stmt = con.prepareStatement
				("INSERT INTO tbCandidato (nomeCandidato, cpfCandidato, rgCandidato, dataNascimentoCandidato, descricaoCandidato, codUsuario) VALUES (?,?,?,?,?,?)");
		stmt.setString(1, cand.getNome());
		stmt.setString(2, cand.getCpf());
		stmt.setString(3, cand.getRg());
		stmt.setString(4, cand.getDataNasc());
		stmt.setString(5, cand.getDescricao());
		stmt.setInt(6, cand.getUsuario().getCodUsuario());
	
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

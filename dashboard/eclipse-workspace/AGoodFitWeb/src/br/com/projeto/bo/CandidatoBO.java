package br.com.projeto.bo;

<<<<<<< HEAD
import br.com.projeto.beans.Candidato;
import br.com.projeto.dao.CandidatoDAO;

public class CandidatoBO {
	
	public String novoCandidato(Candidato novoCandidato) throws  Exception{
		//validando codigo		
		if(novoCandidato.getCodCandidato() <= 0) {
			return "Codigo inválido";
		}
		
		//validando nome
		if((novoCandidato.getNome().length() > 150) || (novoCandidato.getNome().length() < 3)) {
			return "Nome inválido";
		}else {
			novoCandidato.getNome().toUpperCase();
		}
		
		//validando cpf
		if(novoCandidato.getCpf().length() != 14) {
			return "CPF inválido";
		}
		
		CandidatoDAO candidatoDAO = new CandidatoDAO();
		Candidato candidato = candidatoDAO.getCandidato(novoCandidato.getCodCandidato());
				
		if (candidato.getCodCandidato() == 0){
			return candidatoDAO.addCandidato(novoCandidato) + "Candidato Cadastrado"; 
		}else {
			return "Candidato já existe";
		}
	}		
=======
import br.com.projeto.beans.Usuario;
import br.com.projeto.dao.UsuarioDAO;

public class CandidatoBO {
	
	public String novoUsuario(Usuario novoUsuario) throws  Exception{
		if(novoUsuario.getCodigo()<=0) {
			return "Codigo Invalido";
		}
		
		//validações com login
		if((novoUsuario.getLogin().length() > 30) || (novoUsuario.getLogin().length() == 0) {
			return "Nome inálido";
		}
		novoUsuario.setLogin(novoUsuario.getLogin().toUpperCase());
		
		//validações com senha
		if((novoUsuario.getSenha().length() > 50) || (novoUsuario.getSenha().length() == 0)) {
			return "senha invalida";
		}
		
		//validações com email
		if((novoUsuario.getEmail().length() > 150) || (novoUsuario.getEmail().length() == 0)) {
			return "Email invalida";
		}
		
		UsuarioDAO usuarioDAO = new UsuarioDAO();
		Usuario usuario = usuarioDAO.getUsuario(novoUsuario.getCodigo());
		
		if ((usuario.getCodigo() == 0) || (usuario.getUsuarioByEmail(novoUsuario.getEmail())) == 0 ) {
			return usuarioDAO.addUsuario(novoUsuario) + "Usuario Cadastrado"; 
		}else {
			return "Usuário já existe";
		}
	}
>>>>>>> 3524192d38ebc28b6cae093b5744bef8f7b306f7
}

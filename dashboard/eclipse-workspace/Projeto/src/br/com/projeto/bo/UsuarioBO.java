package br.com.projeto.bo;

import br.com.projeto.beans.Usuario;
import br.com.projeto.dao.UsuarioDAO;

public class UsuarioBO {
	
	public String novoUsuario(Usuario objUsuario) throws  Exception{
		if(objUsuario.getCodigo()<=0) {
			return "Codigo Invalido";
		}
		if(objUsuario.getLogin().length()>30) {
			return "Nome inálido";
		}
		if(objUsuario.getSenha().length()>50) {
			return "senha invalida";
		}
		objUsuario.setLogin(objUsuario.getLogin().toUpperCase());
		
		UsuarioDAO dao = new UsuarioDAO();
		Usuario  usu = dao.getUsuario(objUsuario.getCodigo());
		
		if (usu.getCodigo()==0) {
			return dao.addUsuario(objUsuario) + "Usuario Cadastrado"; 
		}else {
			return "usuario já existe";
		}
	}
	
}

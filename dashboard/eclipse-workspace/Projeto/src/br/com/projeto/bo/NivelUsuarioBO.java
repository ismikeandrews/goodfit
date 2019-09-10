package br.com.projeto.bo;

import br.com.projeto.beans.NivelUsuario;
import br.com.projeto.beans.Usuario;
import br.com.projeto.dao.NivelUsuarioDAO;
import br.com.projeto.dao.UsuarioDAO;

public class NivelUsuarioBO {
	
	public String addNivelUsuario(NivelUsuario objNivelUsuario) throws Exception{
		NivelUsuarioDAO dao = new NivelUsuarioDAO();
		NivelUsuario objeto = dao.getNivelUsuario(objNivelUsuario.getCodigo());
		if(objeto.getCodigo()>0) {
			return "Codigo do nivel de usuario ja existe";
		}
		
		UsuarioDAO daoUsuario = new UsuarioDAO();
		Usuario usuario = daoUsuario.getUsuario(objNivelUsuario.getUsuario().getCodigo());
		if(usuario.getCodigo()==0) {
			return "Usuario nao exites";
		}
		
		if(objNivelUsuario.getNome() != "ADMINISTRADOR" && objNivelUsuario.getNome() != "CANDITATO" && objNivelUsuario.getNome() != "EMPRESA" && objNivelUsuario.getNome() != "RESPONSAVEL") {
			return "Nivel de usuario invalido";
		}
		
		objNivelUsuario.setNome(objNivelUsuario.getNome().toUpperCase());
				
	}

}

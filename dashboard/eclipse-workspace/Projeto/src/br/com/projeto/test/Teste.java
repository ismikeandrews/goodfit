package br.com.projeto.test;

import br.com.projeto.beans.Usuario;
import br.com.projeto.dao.UsuarioDAO;

public class Teste {

	public static void main(String[] args) {
		
		UsuarioDAO dao = null;
		try {
			Usuario usu = dao.getUsuario(1);
			System.out.println("Nome..." + usu.getNome());
			System.out.println("Senha..." + usu.getSenha());
			
		}catch(Exception e) {
			e.printStackTrace();
		}

	}

}

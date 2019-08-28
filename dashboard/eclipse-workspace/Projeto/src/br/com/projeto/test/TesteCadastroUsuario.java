package br.com.projeto.test;

import br.com.projeto.beans.Usuario;
import br.com.projeto.dao.UsuarioDAO;

public class TesteCadastroUsuario {

	public static void main(String[] args) {
		UsuarioDAO dao = null;
		try {
			dao = new UsuarioDAO();
			if(dao.addUsuario(new Usuario()) == 0){
				System.out.println("Usuario não cadastrado");
			}else {
				System.out.println("usuario cadastrado");
			}
			
			
		}catch(Exception e) {
			e.printStackTrace();
		}finally {
			try {
				
			}catch(Exception e) {
				e.printStackTrace();
			}
		}
	}

}

package br.com.projeto.test;

import javax.swing.JOptionPane;

import br.com.projeto.beans.Usuario;
import br.com.projeto.dao.UsuarioDAO;

public class TesteCadastroUsuario {

	public static void main(String[] args) {
		UsuarioDAO dao = null;
		
		
		try {
			dao = new UsuarioDAO();
			Usuario objUsuario = new Usuario();
			objUsuario.setCodigo(Integer.parseInt(JOptionPane.showInputDialog("Código Assinatura")));
			objUsuario.setLogin(JOptionPane.showInputDialog("Login"));
			objUsuario.setSenha(JOptionPane.showInputDialog("Senha"));
			objUsuario.getNivel().getCodigo();
			objUsuario.getEndereco().getCodigo();
			
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

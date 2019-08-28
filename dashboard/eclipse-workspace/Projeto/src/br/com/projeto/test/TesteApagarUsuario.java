package br.com.projeto.test;

import javax.swing.JOptionPane;

import br.com.projeto.dao.UsuarioDAO;

public class TesteApagarUsuario {

	public static void main(String[] args) {
		UsuarioDAO dao = null;
		try {
			System.out.println
				(dao.deleteUsuario(Integer.parseInt
				(JOptionPane.showInputDialog
				("Digite p codigo"))));
			
		}catch(Exception e) {
			e.printStackTrace();
		}
		finally {
			try {
				dao.fechar();
			}catch(Exception e) {
				e.printStackTrace();
			}
		}
	}

}

package br.com.projeto.test;

import javax.swing.JOptionPane;

import br.com.projeto.beans.NivelUsuario;
import br.com.projeto.dao.NivelUsuarioDAO;

public class CadastroNivelUsuario {

	public static void main(String[] args) {
		NivelUsuarioDAO dao = null;
		
		
		try {
			dao = new NivelUsuarioDAO();
			NivelUsuario objNivelUsuario = new NivelUsuario();
			objNivelUsuario.setCodigo(Integer.parseInt(JOptionPane.showInputDialog("Código Assinatura")));
			objNivelUsuario.setNome(JOptionPane.showInputDialog("Login"));
			objNivelUsuario.setDescricao(JOptionPane.showInputDialog("Login"));
			
			if(dao.addNivelUsuario(new NivelUsuario()) == 0){
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

package br.com.projeto.test;

import javax.swing.JOptionPane;

import br.com.projeto.beans.NivelUsuario;
import br.com.projeto.bo.NivelUsuarioBO;
import br.com.projeto.dao.NivelUsuarioDAO;

/*
 * @author Michael RM82443
 * 
 * */
public class CadastroNivelBO {
	public static void main(String[] args) {
		NivelUsuarioDAO dao = null;
		NivelUsuario nu = null;
		NivelUsuarioBO boNivel = null;
		try {
			dao = new NivelUsuarioDAO();
			nu = new NivelUsuario();
			boNivel = new NivelUsuarioBO();
			
			nu.setNome(JOptionPane.showInputDialog("Digite um nome"));
			boNivel.addNivelUsuario(nu);
			dao.addNivelUsuario(nu); 
			
			
			
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
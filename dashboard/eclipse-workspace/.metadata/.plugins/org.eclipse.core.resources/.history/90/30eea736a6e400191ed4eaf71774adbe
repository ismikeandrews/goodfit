package br.com.projeto.test;

import javax.swing.JOptionPane;

import br.com.projeto.beans.Usuarioas;
import br.com.projeto.dao.EnderecoDAO;
import br.com.projeto.dao.NivelUsuarioDAO;
import br.com.projeto.dao.UsuarioasDAO;

public class CadastroUsuarioDAO {

	public static void main(String[] args) {
		UsuarioasDAO dao = null;
		Usuarioas usu = null;
		try {
			dao = new UsuarioasDAO();
			usu = new Usuarioas();
			
			usu.setEmail(JOptionPane.showInputDialog("Digite seu email"));
			usu.setEndereco(new EnderecoDAO().getEndereco(Integer.parseInt(JOptionPane.showInputDialog("Digite o codigo do seu Endereco"))));
			usu.setLogin(JOptionPane.showInputDialog("Digite o seu login"));
			usu.setNivel(new NivelUsuarioDAO().getNivelUsuario(Integer.parseInt(JOptionPane.showInputDialog("Digite o codigo do nivel de usuario"))));
			usu.setSenha(JOptionPane.showInputDialog("Digite uma senha"));
			
			dao.addUsuario(usu);
		}catch(Exception e) {
			e.printStackTrace();
		}finally {
			try {
				
			}catch(Exception e) {
				
			}
		}
	}

}

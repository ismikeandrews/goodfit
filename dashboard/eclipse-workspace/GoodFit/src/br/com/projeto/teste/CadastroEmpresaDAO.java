package br.com.projeto.teste;

import javax.swing.JOptionPane;

import br.com.projeto.beans.Empresa;
import br.com.projeto.dao.EmpresaDAO;
import br.com.projeto.dao.UsuarioDAO;
/*
 * @author Jonatas RM76593
 * 
 */
public class CadastroEmpresaDAO {
	public static void main(String[] args) {
		EmpresaDAO dao = null;
		Empresa empresa = null;
		
		try {
			dao = new EmpresaDAO();
			empresa = new Empresa();
			
			UsuarioDAO usuDAO = new UsuarioDAO();
			
			empresa.setRazaoSocialEmpresa(JOptionPane.showInputDialog("Razao Social"));
			empresa.setNomeFantasiaEmpresa(JOptionPane.showInputDialog("Nome Fantasia"));
			empresa.setCnpjEmpresa(JOptionPane.showInputDialog("Cnpj Empresa"));
			empresa.setUsuario(usuDAO.getUsuario(Integer.parseInt(JOptionPane.showInputDialog("Digite o codigo do usuario"))));
			
			dao.addEmpresa(empresa);
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

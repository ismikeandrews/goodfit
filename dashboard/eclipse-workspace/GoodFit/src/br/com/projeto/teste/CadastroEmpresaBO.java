package br.com.projeto.teste;

import javax.swing.JOptionPane;

import br.com.projeto.beans.Empresa;
import br.com.projeto.bo.EmpresaBO;
import br.com.projeto.dao.EmpresaDAO;
import br.com.projeto.dao.UsuarioDAO;

/*
 * @author Michael RM82443
 * 
 */
public class CadastroEmpresaBO {
	
	public static void main(String[] args) {
		EmpresaDAO dao = null;
		Empresa empresa = null;
		EmpresaBO bo = null;
		
		try {
			dao = new EmpresaDAO();
			empresa = new Empresa();
			bo = new EmpresaBO();
			UsuarioDAO usuDAO = new  UsuarioDAO();
			
			empresa.setRazaoSocialEmpresa(JOptionPane.showInputDialog("Razao Social"));
			empresa.setNomeFantasiaEmpresa(JOptionPane.showInputDialog("Nome Fantasia"));
			empresa.setCnpjEmpresa(JOptionPane.showInputDialog("Cnpj Empresa"));
			empresa.setUsuario(usuDAO.getUsuario(Integer.parseInt(JOptionPane.showInputDialog("Digite o codigo do usuario"))));	
			
			bo.addEmpresa(empresa);
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

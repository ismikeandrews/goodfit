package br.com.projeto.test;

import javax.swing.JOptionPane;

import br.com.projeto.beans.Endereco;
import br.com.projeto.dao.EnderecoDAO;


public class CadastroEndereco {

	public static void main(String[] args) {
		EnderecoDAO dao = null;
		
		
		try {
			dao = new EnderecoDAO();
			Endereco objNivelUsuario = new Endereco();
			objNivelUsuario.setCodigo(Integer.parseInt(JOptionPane.showInputDialog("Código Assinatura")));
			objNivelUsuario.setLougradouro(JOptionPane.showInputDialog("Endereco"));
			objNivelUsuario.setNumero(JOptionPane.showInputDialog("Numero"));
			objNivelUsuario.setComplemento(JOptionPane.showInputDialog("Complemento"));
			objNivelUsuario.setCep(JOptionPane.showInputDialog("Cep"));
			objNivelUsuario.setZona(JOptionPane.showInputDialog("Zona"));
			objNivelUsuario.setBairro(JOptionPane.showInputDialog("Bairro"));
			objNivelUsuario.setCidade(JOptionPane.showInputDialog("Cidade"));
			objNivelUsuario.setEstado(JOptionPane.showInputDialog("Estado"));
			
			if(dao.addEndereco(new Endereco()) == 0){
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

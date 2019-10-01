package br.com.projeto.test;


import javax.swing.JOptionPane;

import br.com.projeto.beans.Endereco;
import br.com.projeto.bo.EnderecoBO;

/*
 * @author Michael RM82443
 * 
 * */

public class CadastroEnderecoBO {
	public static void main(String[] args) {
		try {
			EnderecoBO bo = new EnderecoBO();
			Endereco endereco = new Endereco();
			
			endereco.setLougradouro(JOptionPane.showInputDialog("Endereco"));
			endereco.setNumero(JOptionPane.showInputDialog("Numero"));
			endereco.setComplemento(JOptionPane.showInputDialog("Complemento"));
			endereco.setCep(JOptionPane.showInputDialog("Cep"));
			endereco.setZona(JOptionPane.showInputDialog("Zona"));
			endereco.setBairro(JOptionPane.showInputDialog("Bairro"));
			endereco.setCidade(JOptionPane.showInputDialog("Cidade"));
			endereco.setEstado(JOptionPane.showInputDialog("Estado"));
		
			String x = bo.addEndereco(endereco);
			
			
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
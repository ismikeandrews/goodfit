package br.com.projeto.bo;

import br.com.projeto.beans.Endereco;
import br.com.projeto.dao.EnderecoDAO;
/*
 * @author Michael RM82443
 * 
 */
public class EnderecoBO {
	public String addEndereco(Endereco endereco) throws Exception{		
		EnderecoDAO endDao = new EnderecoDAO();
		Endereco end = endDao.getEndereco(endereco.getCodigo());
		
		if(end.getCodigo() <= 0) {
			return "Codigo nivel de usuario não pode ser menor que ou igual a 0";
		}
		
		if(end.getCep().length() > 8 || end.getCep().length()  < 8) {
			return "A quantidade de caracters é invalida";
		}
		
		endereco.setBairro(endereco.getBairro().toUpperCase());
		endereco.setCidade(endereco.getCidade().toUpperCase());
		endereco.setEstado(endereco.getEstado().toUpperCase());
		endereco.setLougradouro(endereco.getLougradouro().toUpperCase());
		endereco.setZona(endereco.getZona().toUpperCase());
		endereco.setComplemento(endereco.getComplemento().toUpperCase());
		
		return "Cadastro realizado com sucesso";
	}
}

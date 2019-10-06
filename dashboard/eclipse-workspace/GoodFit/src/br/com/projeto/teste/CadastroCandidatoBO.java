package br.com.projeto.teste;

import javax.swing.JOptionPane;

import br.com.projeto.beans.Candidato;
import br.com.projeto.bo.CandidatoBO;
import br.com.projeto.dao.CandidatoDAO;
import br.com.projeto.dao.UsuarioDAO;

/*
 * @author Cyntia RM82273
 * 
 */
public class CadastroCandidatoBO {

	public static void main(String[] args) {
		try {
			CandidatoDAO dao = new CandidatoDAO();;
			Candidato cand = new Candidato();
			CandidatoBO candBO = new CandidatoBO();
			UsuarioDAO daoUsu = new UsuarioDAO();
			
			
			cand.setNome(JOptionPane.showInputDialog("Nome"));
			cand.setCpf(JOptionPane.showInputDialog("CPF"));
			cand.setRg(JOptionPane.showInputDialog("RG"));
			cand.setDataNasc(JOptionPane.showInputDialog("Data de Nascimento"));
			cand.setDescricao(JOptionPane.showInputDialog("Descricao"));
			cand.setUsuario(daoUsu.getUsuario(Integer.parseInt(JOptionPane.showInputDialog("Digite o codigo do usuario"))));
			
			candBO.novoCandidato(cand);
			dao.addCandidato(cand);
			
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

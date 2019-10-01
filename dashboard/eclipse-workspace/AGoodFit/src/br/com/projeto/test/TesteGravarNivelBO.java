package br.com.projeto.test;

import br.com.projeto.beans.NivelUsuario;
import br.com.projeto.bo.NivelUsuarioBO;

public class TesteGravarNivelBO {

	public static void main(String[] args) {
		try {
			NivelUsuarioBO bo = new NivelUsuarioBO();
			NivelUsuario nu = new NivelUsuario();
			
			
			String x = bo.addNivel();
		}catch(Exception e) {
			e.printStackTrace();
		}

	}

}

package br.com.projeto.beans;

public class Moderador extends Usuario{
	private String sobrenome;
	private String token;
	private String unidade;
	
	public Moderador() {
		super();
	}

	public Moderador(int codigo, String nome, Endereco endereco, Contato contato, String login, String senha,
			String tipo, String sobrenome, String token, String unidade) {
		super(codigo, nome, endereco, contato, login, senha, tipo);
		this.sobrenome = sobrenome;
		this.token = token;
		this.unidade = unidade;
	}



	public String getTudo() {
		return sobrenome+"\n"+token+"\n"+unidade;
	}
	
	public void setTudo(String sobrenome, String token, String unidade) {
		this.sobrenome = sobrenome;
		this.token = token;
		this.unidade = unidade;
	}

	public String getSobrenome() {
		return sobrenome;
	}
	
	public void setSobrenome(String sobrenome) {
		this.sobrenome = sobrenome;
	}
	
	public String getToken() {
		return token;
	}
	
	public void setToken(String token) {
		this.token = token;
	}
	
	public String getUnidade() {
		return unidade;
	}
	
	public void setUnidade(String unidade) {
		this.unidade = unidade;
	}
}

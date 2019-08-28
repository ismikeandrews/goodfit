package br.com.projeto.beans;

public class Usuario {
	private String nome;
	private Endereco endereco;
	private String login;
	private String senha;
	private String tipo;

	public Usuario() {
		super();
	}

	public Usuario(String nome, Endereco endereco, String login, String senha, String tipo) {
		super();
		this.nome = nome;
		this.endereco = endereco;
		this.login = login;
		this.senha = senha;
		this.tipo = tipo;
	}



	public String getTudo() {
		return nome+"\n"+endereco.getTudo()+"\n"+"\n"+login+"\n"+senha+"\n"+tipo;
	}
	
	public void setTudo(int codigo,String nome, Endereco endereco, String login, String senha, String tipo) {
		this.nome = nome;
		this.endereco = endereco;
		this.login = login;
		this.senha = senha;
		this.tipo = tipo;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public Endereco getEndereco() {
		return endereco;
	}

	public void setEndereco(Endereco endereco) {
		this.endereco = endereco;
	}

	public String getLogin() {
		return login;
	}

	public void setLogin(String login) {
		this.login = login;
	}

	public String getSenha() {
		return senha;
	}

	public void setSenha(String senha) {
		this.senha = senha;
	}

	public String getTipo() {
		return tipo;
	}

	public void setTipo(String tipo) {
		this.tipo = tipo;
	}
}

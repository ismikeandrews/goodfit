package br.com.projeto.beans;

public class Usuario {
	private int codigo;
	private String nome;
	private Endereco endereco;
	private Contato contato;
	private String login;
	private String senha;
	private String tipo;
	
	public Usuario() {
		super();
	}

	public Usuario(int codigo, String nome, Endereco endereco, Contato contato, String login, String senha, String tipo) {
		super();
		this.codigo = codigo;
		this.nome = nome;
		this.endereco = endereco;
		this.contato = contato;
		this.login = login;
		this.senha = senha;
		this.tipo = tipo;
	}

	public String getTudo() {
		return codigo+"\n"+nome+"\n"+endereco.getTudo()+"\n"+contato.getTudo()+"\n"+login+"\n"+senha+"\n"+tipo;
	}
	
	public void setTudo(int codigo,String nome, Endereco endereco, Contato contato, String login, String senha, String tipo) {
		this.codigo = codigo;
		this.nome = nome;
		this.endereco = endereco;
		this.contato = contato;
		this.login = login;
		this.senha = senha;
		this.tipo = tipo;
	}

	public int getCodigo() {
		return codigo;
	}

	public void setCodigo(int codigo) {
		this.codigo = codigo;
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

	public Contato getContato() {
		return contato;
	}

	public void setContato(Contato contato) {
		this.contato = contato;
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

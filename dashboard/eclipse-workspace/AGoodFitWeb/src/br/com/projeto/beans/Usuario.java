package br.com.projeto.beans;

public class Usuario {
	private int codigo;
	private String login;
	private String senha;
	private NivelUsuario nivel;
	private Endereco endereco;
	
	public Usuario(int codigo, String login, String senha, NivelUsuario nivel, Endereco endereco) {
		super();
		this.codigo = codigo;
		this.login = login;
		this.senha = senha;
		this.nivel = nivel;
		this.endereco = endereco;
	}

	public Usuario() {
		super();
	}
	
	public String getTudo() {
		return  codigo+"\n"+login+"\n"+senha+"\n"+nivel.getTudo()+"\n"+endereco.getTudo();
	}
	
	public void setTudo(int codigo, String login, String senha, NivelUsuario nivel, Endereco endereco) {
		this.codigo = codigo;
		this.login = login;
		this.senha = senha;
		this.nivel = nivel;
		this.endereco = endereco;
	}

	public int getCodigo() {
		return codigo;
	}
	
	public void setCodigo(int codigo) {
		this.codigo = codigo;
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
	
	public NivelUsuario getNivel() {
		return nivel;
	}
	
	public void setNivel(NivelUsuario nivel) {
		this.nivel = nivel;
	}
	
	public Endereco getEndereco() {
		return endereco;
	}
	
	public void setEndereco(Endereco endereco) {
		this.endereco = endereco;
	}
}

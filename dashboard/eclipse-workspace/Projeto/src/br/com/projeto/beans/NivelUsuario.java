package br.com.projeto.beans;

public class NivelUsuario {
	private int codigo;
	private String nome;
	private String descricao;
	
	public NivelUsuario() {
		super();
	}

	public NivelUsuario(int codigo, String nome, String descricao) {
		super();
		this.codigo = codigo;
		this.nome = nome;
		this.descricao = descricao;
	}
	
	public String getTudo() {
		return codigo+"\n"+nome+"\n"+descricao;
	}
	
	public void setTudo(int codigo, String nome, String descricao) {
		this.codigo = codigo;
		this.nome = nome;
		this.descricao = descricao;
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
	
	public String getDescricao() {
		return descricao;
	}
	
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}	
}

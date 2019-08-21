package br.com.projeto.beans;

public class Ead {
	private Usuario tipo;
	private String descricao;
	private int modulo;
	
	public Ead() {
		super();
	}

	public Ead(Usuario tipo, String descricao, int modulo) {
		super();
		this.tipo = tipo;
		this.descricao = descricao;
		this.modulo = modulo;
	}
	
	public String getTudo() {
		return tipo+"\n"+descricao+"\n"+modulo;
	}
	
	public void setTudo(Usuario tipo, String descricao, int modulo) {
		this.tipo = tipo;
		this.descricao = descricao;
		this.modulo = modulo;
	}

	public Usuario getTipo() {
		return tipo;
	}
	
	public void setTipo(Usuario tipo) {
		this.tipo = tipo;
	}
	
	public String getDescricao() {
		return descricao;
	}
	
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}
	
	public int getModulo() {
		return modulo;
	}
	
	public void setModulo(int modulo) {
		this.modulo = modulo;
	}
}

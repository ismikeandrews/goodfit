package br.com.projeto.beans;

public class Beneficio {
	private String tipo;
	private String descricao;
	private double valor;
	
	public Beneficio() {
		super();
	}

	public Beneficio(String tipo, String descricao, double valor) {
		super();
		this.tipo = tipo;
		this.descricao = descricao;
		this.valor = valor;
	}
	
	public String getTudo() {
		return tipo+"\n"+descricao+"\n"+valor;
	}
	
	public void setTudo(String tipo, String descricao, double valor) {
		this.tipo = tipo;
		this.descricao = descricao;
		this.valor = valor;
		
	}

	public String getTipo() {
		return tipo;
	}
	
	public void setTipo(String tipo) {
		this.tipo = tipo;
	}
	
	public String getDescricao() {
		return descricao;
	}
	
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}
	
	public double getValor() {
		return valor;
	}
	
	public void setValor(double valor) {
		this.valor = valor;
	}	
}

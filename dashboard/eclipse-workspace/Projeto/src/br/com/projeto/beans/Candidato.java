package br.com.projeto.beans;

public class Candidato extends Usuario{
	private String sobrenome;
	private String cpf;
	private String rg;
	private String dataNasc;
	private Curriculo curriculo;
	
	public Candidato() {
		super();
	}

	public String getTudo() {
		return sobrenome+"\n"+cpf+"\n"+rg+"\n"+dataNasc+"\n"+curriculo.getTudo();
	}
	
	public void setTudo(String sobrenome, String cpf, String rg, String dataNasc, Curriculo curriculo) {
		this.sobrenome = sobrenome;
		this.cpf = cpf;
		this.rg = rg;
		this.dataNasc = dataNasc;
		this.curriculo = curriculo;
	}

	public String getSobrenome() {
		return sobrenome;
	}
	
	public void setSobrenome(String sobrenome) {
		this.sobrenome = sobrenome;
	}
	
	public String getCpf() {
		return cpf;
	}
	
	public void setCpf(String cpf) {
		this.cpf = cpf;
	}
	
	public String getRg() {
		return rg;
	}
	
	public void setRg(String rg) {
		this.rg = rg;
	}
	
	public String getDataNasc() {
		return dataNasc;
	}
	
	public void setDataNasc(String dataNasc) {
		this.dataNasc = dataNasc;
	}
	
	public Curriculo getCurriculo() {
		return curriculo;
	}
	
	public void setCurriculo(Curriculo curriculo) {
		this.curriculo = curriculo;
	}
}

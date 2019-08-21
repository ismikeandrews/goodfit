package br.com.projeto.beans;

public class Vaga {
	private Endereco endereco;
	private String cargaHoraria;
	private double salario;
	private String descricao;
	private int qted;
	private String requisitos;
	private String regimeContratacao;
	private Beneficio beneficio;
	
	public Vaga() {
		super();
	}
	
	public Vaga(Endereco endereco,String cargaHoraria, double salario, String descricao, int qted, String requisitos,
			String regimeContratacao, Beneficio beneficio) {
		super();
		this.endereco = endereco;
		this.cargaHoraria = cargaHoraria;
		this.salario = salario;
		this.descricao = descricao;
		this.qted = qted;
		this.requisitos = requisitos;
		this.regimeContratacao = regimeContratacao;
		this.beneficio = beneficio;
	}
	
	public String getTudo() {
		return endereco+"\n"+cargaHoraria+"\n"+salario+"\n"+descricao+"\n"+qted+"\n"+requisitos+"\n"+regimeContratacao+"\n"+beneficio;
	}
	
	public void setTudo(Endereco endereco, String cargaHoraria, double salario, String descricao, int qted, String requisitos,
			String regimeContratacao, Beneficio beneficio) {
		this.endereco = endereco;
		this.cargaHoraria = cargaHoraria;
		this.salario = salario;
		this.descricao = descricao;
		this.qted = qted;
		this.requisitos = requisitos;
		this.regimeContratacao = regimeContratacao;
		this.beneficio = beneficio;
	}
	
	public Endereco getEndereco() {
		return endereco;
	}
	
	public void setEndereco(Endereco endereco) {
		this.endereco = endereco;
	}

	public String getCargaHoraria() {
		return cargaHoraria;
	}
	
	public void setCargaHoraria(String cargaHoraria) {
		this.cargaHoraria = cargaHoraria;
	}
	
	public double getSalario() {
		return salario;
	}
	
	public void setSalario(double salario) {
		this.salario = salario;
	}
	
	public String getDescricao() {
		return descricao;
	}
	
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}
	
	public int getQted() {
		return qted;
	}
	
	public void setQted(int qted) {
		this.qted = qted;
	}
	
	public String getRequisitos() {
		return requisitos;
	}
	
	public void setRequisitos(String requisitos) {
		this.requisitos = requisitos;
	}
	
	public String getRegimeContratacao() {
		return regimeContratacao;
	}
	
	public void setRegimeContratacao(String regimeContratacao) {
		this.regimeContratacao = regimeContratacao;
	}
	
	public Beneficio getBeneficio() {
		return beneficio;
	}
	
	public void setBeneficio(Beneficio beneficio) {
		this.beneficio = beneficio;
	}
}

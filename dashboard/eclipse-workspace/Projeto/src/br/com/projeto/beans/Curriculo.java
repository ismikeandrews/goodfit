package br.com.projeto.beans;

public class Curriculo {
	private String objetivo;
	private String competencias;
	private String experiencia;
	private String nivelEscolaridade;
	private String nivelAlfabetizacao;
	
	public Curriculo() {
		super();
	}
	
	public Curriculo(String objetivo, String competencias, String experiencia, String nivelEscolaridade,
			String nivelAlfabetizacao) {
		super();
		this.objetivo = objetivo;
		this.competencias = competencias;
		this.experiencia = experiencia;
		this.nivelEscolaridade = nivelEscolaridade;
		this.nivelAlfabetizacao = nivelAlfabetizacao;
	}
	
	public String getTudo() {
		return objetivo+"\n"+competencias+"\n"+experiencia+"\n"+nivelEscolaridade+"\n"+nivelAlfabetizacao;
	}
	
	public void setTudo(String objetivo, String competencias, String experiencia, String nivelEscolaridade,
			String nivelAlfabetizacao) {
		this.objetivo = objetivo;
		this.competencias = competencias;
		this.experiencia = experiencia;
		this.nivelEscolaridade = nivelEscolaridade;
		this.nivelAlfabetizacao = nivelAlfabetizacao;
	}
	
	public String getObjetivo() {
		return objetivo;
	}
	
	public void setObjetivo(String objetivo) {
		this.objetivo = objetivo;
	}
	
	public String getCompetencias() {
		return competencias;
	}
	
	public void setCompetencias(String competencias) {
		this.competencias = competencias;
	}
	
	public String getExperiencia() {
		return experiencia;
	}
	
	public void setExperiencia(String experiencia) {
		this.experiencia = experiencia;
	}
	
	public String getNivelEscolaridade() {
		return nivelEscolaridade;
	}
	
	public void setNivelEscolaridade(String nivelEscolaridade) {
		this.nivelEscolaridade = nivelEscolaridade;
	}
	
	public String getNivelAlfabetizacao() {
		return nivelAlfabetizacao;
	}
	
	public void setNivelAlfabetizacao(String nivelAlfabetizacao) {
		this.nivelAlfabetizacao = nivelAlfabetizacao;
	}
}

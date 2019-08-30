package br.com.projeto.beans;

public class Candidatura {
	private Vaga vaga;
	private Candidato candidato;
	private String status;
	
	public Candidatura() {
		super();
	}

	public Candidatura(Vaga vaga, Candidato candidato, String status) {
		super();
		this.vaga = vaga;
		this.candidato = candidato;
		this.status = status;
	}
	
	public String getTudo() {
		return vaga+"\n"+candidato+"\n"+status;
	}
	
	public void setTudo(Vaga vaga, Candidato candidato, String status) {
		this.vaga = vaga;
		this.candidato = candidato;
		this.status = status;
	}

	public Vaga getVaga() {
		return vaga;
	}
	
	public void setVaga(Vaga vaga) {
		this.vaga = vaga;
	}
	
	public Candidato getCandidato() {
		return candidato;
	}
	
	public void setCandidato(Candidato candidato) {
		this.candidato = candidato;
	}
	
	public String getStatus() {
		return status;
	}
	
	public void setStatus(String status) {
		this.status = status;
	}
}

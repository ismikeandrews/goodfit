package br.com.projeto.beans;

public class Contato {
	private String email;
	private String telefone;
	
	public Contato() {
		super();
	}

	public Contato(String email, String telefone) {
		super();
		this.email = email;
		this.telefone = telefone;
	}
	
	public String getTudo() {
		return email+"\n"+telefone;
	}
	
	public void setTudo(String email, String telefone) {
		this.email = email;
		this.telefone = telefone;
	}

	public String getEmail() {
		return email;
	}
	
	public void setEmail(String email) {
		this.email = email;
	}
	
	public String getTelefone() {
		return telefone;
	}
	
	public void setTelefone(String telefone) {
		this.telefone = telefone;
	}
}

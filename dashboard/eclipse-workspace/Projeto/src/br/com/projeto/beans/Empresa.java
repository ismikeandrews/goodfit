package br.com.projeto.beans;

public class Empresa extends Usuario{
	private String cnpj;
	private String nomeFantasia;
	private Vaga vaga;
	
	public Empresa() {
		super();
	}

	public Empresa(String nome, Endereco endereco, String login, String senha, String tipo, String cnpj,
			String nomeFantasia, Vaga vaga) {
		super(nome, endereco, login, senha, tipo);
		this.cnpj = cnpj;
		this.nomeFantasia = nomeFantasia;
		this.vaga = vaga;
	}

	public String getTudo() {
		return cnpj+"\n"+nomeFantasia+"\n"+vaga;
	}
	
	public void setTudo(String cnpj, String nomeFantasia, Vaga vaga) {
		this.cnpj = cnpj;
		this.nomeFantasia = nomeFantasia;
		this.vaga = vaga;
	}

	public String getCnpj() {
		return cnpj;
	}
	
	public void setCnpj(String cnpj) {
		this.cnpj = cnpj;
	}
	
	public String getNomeFantasia() {
		return nomeFantasia;
	}
	
	public void setNomeFantasia(String nomeFantasia) {
		this.nomeFantasia = nomeFantasia;
	}
	
	public Vaga getVaga() {
		return vaga;
	}
	
	public void setVaga(Vaga vaga) {
		this.vaga = vaga;
	}
}

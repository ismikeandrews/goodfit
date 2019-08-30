package br.com.projeto.beans;

public class Endereco {
	private String lougradouro;
	private String cep;
	private String numero;
	private String complemento;
	private String cidade;
	private String uf;
	private String bairro;
	
	public Endereco() {
		super();
	}
	
	public Endereco(String lougradouro, String cep, String numero, String complemento, String cidade, String uf,
			String bairro) {
		super();
		this.lougradouro = lougradouro;
		this.cep = cep;
		this.numero = numero;
		this.complemento = complemento;
		this.cidade = cidade;
		this.uf = uf;
		this.bairro = bairro;
	}
	
	public String getTudo() {
		return lougradouro+"\n"+cep+"\n"+numero+"\n"+complemento+"\n"+cidade+"\n"+uf+"\n"+bairro;
	}
	
	public void setTudo(String lougradouro, String cep, String numero, String complemento, String cidade, String uf,
			String bairro) {
		this.lougradouro = lougradouro;
		this.cep = cep;
		this.numero = numero;
		this.complemento = complemento;
		this.cidade = cidade;
		this.uf = uf;
		this.bairro = bairro;
	}

	public String getLougradouro() {
		return lougradouro;
	}
	
	public void setLougradouro(String lougradouro) {
		this.lougradouro = lougradouro;
	}
	
	public String getCep() {
		return cep;
	}
	
	public void setCep(String cep) {
		this.cep = cep;
	}
	
	public String getNumero() {
		return numero;
	}
	
	public void setNumero(String numero) {
		this.numero = numero;
	}
	
	public String getComplemento() {
		return complemento;
	}
	
	public void setComplemento(String complemento) {
		this.complemento = complemento;
	}
	
	public String getCidade() {
		return cidade;
	}
	
	public void setCidade(String cidade) {
		this.cidade = cidade;
	}
	
	public String getUf() {
		return uf;
	}
	
	public void setUf(String uf) {
		this.uf = uf;
	}
	
	public String getBairro() {
		return bairro;
	}
	
	public void setBairro(String bairro) {
		this.bairro = bairro;
	}
}

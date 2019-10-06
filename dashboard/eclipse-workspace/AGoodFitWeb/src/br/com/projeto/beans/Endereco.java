package br.com.projeto.beans;
/*
 * @author Michael RM82443
 * 
 * */
public class Endereco {
	private int codigo;
	private String lougradouro;
	private String numero;
	private String complemento;
	private String cep;
	private String bairro;
	private String zona;
	private String cidade;
	private String estado;
	
	public Endereco() {
		super();
	}
	
	public Endereco(int codigo, String lougradouro, String numero, String complemento, String cep, String bairro,
			String zona, String cidade, String estado) {
		super();
		this.codigo = codigo;
		this.lougradouro = lougradouro;
		this.numero = numero;
		this.complemento = complemento;
		this.cep = cep;
		this.bairro = bairro;
		this.zona = zona;
		this.cidade = cidade;
		this.estado = estado;
	}



	public String getTudo() {
		return codigo+"\n"+lougradouro+"\n"+numero+"\n"+complemento+"\n"+cep+"\n"+bairro+"\n"+zona+"\n"+cidade+"\n"+estado;
	}
	
	public void setTudo(int codigo, String lougradouro, String numero, String complemento, String cep, String bairro,
			String zona, String cidade, String estado) {
		this.codigo = codigo;
		this.lougradouro = lougradouro;
		this.numero = numero;
		this.complemento = complemento;
		this.cep = cep;
		this.bairro = bairro;
		this.zona = zona;
		this.cidade = cidade;
		this.estado = estado;
	}

	public int getCodigo() {
		return codigo;
	}
	
	public void setCodigo(int codigo) {
		this.codigo = codigo;
	}
	
	public String getLougradouro() {
		return lougradouro;
	}
	
	public void setLougradouro(String lougradouro) {
		this.lougradouro = lougradouro;
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
	
	public String getCep() {
		return cep;
	}
	
	public void setCep(String cep) {
		this.cep = cep;
	}
	
	public String getBairro() {
		return bairro;
	}
	
	public void setBairro(String bairro) {
		this.bairro = bairro;
	}
	
	public String getZona() {
		return zona;
	}
	
	public void setZona(String zona) {
		this.zona = zona;
	}
	
	public String getEstado() {
		return estado;
	}

	public void setEstado(String estado) {
		this.estado = estado;
	}

	public String getCidade() {
		return cidade;
	}

	public void setCidade(String cidade) {
		this.cidade = cidade;
	}
	
}

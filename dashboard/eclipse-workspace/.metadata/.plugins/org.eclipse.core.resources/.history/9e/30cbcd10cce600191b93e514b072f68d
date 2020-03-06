package br.com.projeto.beans;

public class Empresa extends Usuario {

	private int codEmpresa;
	private String razaoSocialEmpresa;
	private String nomeFantasiaEmpresa;
	private String cnpjEmpresa;
	private Usuario usuario;
	
	//CONSTRUTORES
	public Empresa(int codUsuario, String login, String senha, String email, NivelUsuario nivel, Endereco endereco,
			int codEmpresa, String razaoSocialEmpresa, String nomeFantasiaEmpresa, String cnpjEmpresa,
			Usuario usuario) {
		super(codUsuario, login, senha, email, nivel, endereco);
		this.codEmpresa = codEmpresa;
		this.razaoSocialEmpresa = razaoSocialEmpresa;
		this.nomeFantasiaEmpresa = nomeFantasiaEmpresa;
		this.cnpjEmpresa = cnpjEmpresa;
		this.usuario = usuario;
	}

	public Empresa() {
		super();
	}
	
	//GetTUDO and SetTUDO
	public String getTudo() {
		return codEmpresa + "\n" +
				razaoSocialEmpresa + "\n" +
				nomeFantasiaEmpresa + "\n" +
				cnpjEmpresa + "\n" +
				usuario;
	}
	
	public void setTudo(int codEmpresa, String razaoSocialEmpresa, 
			String nomeFantasiaEmpresa, String cnpjEmpresa, int codUsuario) {
		this.codEmpresa = codEmpresa;
		this.razaoSocialEmpresa = razaoSocialEmpresa;
		this.nomeFantasiaEmpresa = nomeFantasiaEmpresa;
		this.cnpjEmpresa = cnpjEmpresa;
		this.usuario = usuario;
	}
	
	//GETTERS and SETTERS
	public int getCodEmpresa() {
		return codEmpresa;
	}
	
	public void setCodEmpresa(int codEmpresa) {
		this.codEmpresa = codEmpresa;
	}
	
	public String getRazaoSocialEmpresa() {
		return razaoSocialEmpresa;
	}
	
	public void setRazaoSocialEmpresa(String razaoSocialEmpresa) {
		this.razaoSocialEmpresa = razaoSocialEmpresa;
	}
	
	public String getNomeFantasiaEmpresa() {
		return nomeFantasiaEmpresa;
	}
	
	public void setNomeFantasiaEmpresa(String nomeFantasiaEmpresa) {
		this.nomeFantasiaEmpresa = nomeFantasiaEmpresa;
	}
	
	public String getCnpjEmpresa() {
		return cnpjEmpresa;
	}
	
	public void setCnpjEmpresa(String cnpjEmpresa) {
		this.cnpjEmpresa = cnpjEmpresa;
	}
	
	public Usuario getUsuario() {
		return usuario;
	}
	
	public void setUsuario(Usuario usuario) {
		this.usuario = usuario;
	}
	
}

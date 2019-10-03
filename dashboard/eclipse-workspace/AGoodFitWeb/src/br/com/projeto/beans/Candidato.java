package br.com.projeto.beans;

<<<<<<< HEAD

public class Candidato extends Usuario{
=======
public class Candidato extends Usuario {
>>>>>>> 3524192d38ebc28b6cae093b5744bef8f7b306f7
	private int codCandidato;
	private String nome;
	private String cpf;
	private String rg;
	private String dataNasc;
	private String descricao;
	private Usuario usuario;
	
	public Candidato() {
		super();
	}
<<<<<<< HEAD
	
	public Candidato(int codUsuario, String login, String senha, String email, NivelUsuario nivel, Endereco endereco,
			int codCandidato, String nome, String cpf, String rg, String dataNasc, String descricao, Usuario usuario) {
		super(codUsuario, login, senha, email, nivel, endereco);
=======
	public Candidato(int codigo, String login, String senha, String email, NivelUsuario nivel, Endereco endereco,
			int codCandidato, String nome, String cpf, String rg, String dataNasc, String descricao,
			Usuario usuario) {
		super(codigo, login, senha, email, nivel, endereco);
>>>>>>> 3524192d38ebc28b6cae093b5744bef8f7b306f7
		this.codCandidato = codCandidato;
		this.nome = nome;
		this.cpf = cpf;
		this.rg = rg;
		this.dataNasc = dataNasc;
		this.descricao = descricao;
		this.usuario = usuario;
	}
<<<<<<< HEAD

=======
>>>>>>> 3524192d38ebc28b6cae093b5744bef8f7b306f7
	public int getCodCandidato() {
		return codCandidato;
	}
	public void setCodCandidato(int codCandidato) {
		this.codCandidato = codCandidato;
	}
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
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
	public String getDescricao() {
		return descricao;
	}
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}
	public Usuario getUsuario() {
		return usuario;
	}
	public void setUsuario(Usuario usuario) {
		this.usuario = usuario;
	}
}

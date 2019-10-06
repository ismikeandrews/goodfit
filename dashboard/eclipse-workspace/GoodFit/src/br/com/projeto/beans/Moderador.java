package br.com.projeto.beans;
/*
 * @author Nicolas RM82331
 * 
 */
public class Moderador extends Usuario{
	private int codModerador;
	private String nomeModerador;
	private String cpfModerador;
	private String unidade;
	private Usuario usuario;
	
	
	
	public Moderador() {
		super();
	}

	public Moderador(int codUsuario, String login, String senha, String email, NivelUsuario nivel, Endereco endereco,
			int codModerador, String nomeModerador, String cpfModerador, String unidade, Usuario usuario) {
		super(codUsuario, login, senha, email, nivel, endereco);
		this.codModerador = codModerador;
		this.nomeModerador = nomeModerador;
		this.cpfModerador = cpfModerador;
		this.unidade = unidade;
		this.usuario = usuario;
	}
	
	public int getCodModerador() {
		return codModerador;
	}
	public void setCodModerador(int codModerador) {
		this.codModerador = codModerador;
	}
	public String getNomeModerador() {
		return nomeModerador;
	}
	public void setNomeModerador(String nomeModerador) {
		this.nomeModerador = nomeModerador;
	}
	public String getCpfModerador() {
		return cpfModerador;
	}
	public void setCpfModerador(String cpfModerador) {
		this.cpfModerador = cpfModerador;
	}
	public String getUnidade() {
		return unidade;
	}
	public void setUnidade(String unidade) {
		this.unidade = unidade;
	}
	public Usuario getUsuario() {
		return usuario;
	}
	public void setUsuario(Usuario usuario) {
		this.usuario = usuario;
	}
	
	
}

<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="java.sql.*"%>
<%@ page language="java" import="br.com.projeto.conexao.Conecta"%>
<%
	String login = request.getParameter("login");
	String email = request.getParameter("email");
	String senha = request.getParameter("senha");
	String nivel = request.getParameter("nivel");


  try{
    Connection con = Conecta.getConnection();
    String sql = "insert into tbUsuario(loginUsuario, email, password, codNivelUsuario) value (?,?,?,?)";

	PreparedStatement stmt = con.prepareStatement(sql);
	
	stmt.setString(1, login);
	stmt.setString(2, email);
	stmt.setString(3, senha);
	stmt.setString(4, nivel);
    stmt.execute();
    stmt.close();
    con.close();

    out.print("Cadastrou corretamente");
  } catch (Exception e) {
    out.print("Deu erro: " + e);
  }
%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="java.sql.*"%>
<%@ page language="java" import="conexao.Conecta"%>
<%
	String titulo = request.getParameter("titulo");


  try{
    Connection con = Conecta.getConnection();
    String sql = "insert into tbNivelUsuario(nomeNivelUsuario) value (?)";

	PreparedStatement stmt = con.prepareStatement(sql);

	stmt.setString(1, titulo);
    stmt.execute();
    stmt.close();
    con.close();

    out.print("Cadastrou corretamente");
  } catch (Exception e) {
    out.print("Deu erro: " + e);
  }
%>
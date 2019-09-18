<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="java.sql.*"%%>
<%@ page language="java" import="br.com.projeto.conexao.Conecta"%>

<%

try{
	Connection con = Conecta.getConnection();
	String sql = "select * from tbNivelUsuario";
	
}catch(Exception e){
	out.print("Deu erro: " + e);
}

%>
package br.com.projeto.servelet;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.projeto.beans.NivelUsuario;
import br.com.projeto.dao.NivelUsuarioDAO;

/**
 * Servlet implementation class Cadastro
 */
@WebServlet("/Cadastro")
public class Cadastro extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Cadastro() {
        super();
        // TODO Auto-generated constructor stub
    }
	

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
		String titulo = request.getParameter("titulo");
		
		NivelUsuario nu = new NivelUsuario();
		
		nu.setNome(titulo);
		
		try {
			NivelUsuarioDAO nuDAO = new NivelUsuarioDAO();
			nuDAO.addNivelUsuario(nu);
			request.setAttribute("message", "Inserido com sucesso");
		}catch(Exception e){
			request.setAttribute("message", "Problema na inserção.");
		}
		RequestDispatcher dispatcher = request.getRequestDispatcher("jsp/listarNivel.jsp");
		dispatcher.forward(request, response);
	}

}

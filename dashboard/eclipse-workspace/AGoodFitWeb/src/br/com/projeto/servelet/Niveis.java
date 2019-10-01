package br.com.projeto.servelet;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.projeto.beans.NivelUsuario;
import br.com.projeto.dao.NivelUsuarioDAO;

/**
 * Servlet implementation class Niveis
 */
@WebServlet("/Niveis")
public class Niveis extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Niveis() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		 
		NivelUsuario nu = new NivelUsuario();
		 
		 try {
			NivelUsuarioDAO nuDAO = new NivelUsuarioDAO();
			nuDAO.todosNivelUsuario();
		 }catch(Exception e) {
			 
		 }
	     request.setAttribute("niveis", nu); 
	     request.getRequestDispatcher("niveis.jsp").forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
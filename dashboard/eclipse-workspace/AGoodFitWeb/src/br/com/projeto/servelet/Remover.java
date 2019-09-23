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
 * Servlet implementation class Remover
 */
@WebServlet("/Remover")
public class Remover extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Remover() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		int id = Integer.parseInt(request.getParameter("id"));
		NivelUsuario nu = new NivelUsuario(); 
		nu.getCodigo();
		
		try {
			NivelUsuarioDAO nuDAO = new NivelUsuarioDAO();
			nuDAO.deleteNivelUsuario();
			request.setAttribute("message", "Apagado com sucesso");
		}catch(Exception e){
			request.setAttribute("message", "Problema ao apagar.");
		}
		RequestDispatcher dispatcher = request.getRequestDispatcher("deletarNivel.jsp");
		dispatcher.forward(request, response);
	}

}

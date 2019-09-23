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
 * Servlet implementation class Alterar
 */
@WebServlet("/Alterar")
public class Alterar extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Alterar() {
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
		String titulo = request.getParameter("titulo");
		
		NivelUsuario nu = new NivelUsuario();
		
		nu.setCodigo(id);
		nu.setNome(titulo);
		
		try {
			NivelUsuarioDAO nuDAO = new NivelUsuarioDAO();
			nuDAO.atualizar(nu.getCodigo(), nu.getNome());
			request.setAttribute("message", "O registro " + id + " foi alterado com sucesso.");
		}catch(Exception e) {
			request.setAttribute("message", "Problema na alteração.");
		}
		RequestDispatcher dispatcher = request.getRequestDispatcher("AlterarNivel.jsp");
		dispatcher.forward(request, response);

		
	}

}

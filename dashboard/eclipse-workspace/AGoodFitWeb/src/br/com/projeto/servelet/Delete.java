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
 * Servlet implementation class Delete
 */
@WebServlet("/Delete")
public class Delete extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Delete() {
        super();
        // TODO Auto-generated constructor stub
    }
    
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		int id = Integer.parseInt(request.getParameter("id"));
		
		
		try {
			NivelUsuarioDAO nuDAO = new NivelUsuarioDAO();
			nuDAO.deleteNivelUsuario(id);
			request.setAttribute("message", "Apagado com sucesso");
		}catch(Exception e){
			request.setAttribute("message", "Problema ao apagar.");
		}
		RequestDispatcher dispatcher = request.getRequestDispatcher("jsp/deletarNivel.jsp");
		dispatcher.forward(request, response);
	}

}

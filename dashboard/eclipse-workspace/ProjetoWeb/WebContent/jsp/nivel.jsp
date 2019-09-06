<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="#"><!-- dropdown-menu dropdown-menu-right -->
          CRUD
        </a>
        <div class="dropdown">
          <a class="dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <form class="px-4 py-3">
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Login</label>
                  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Senha</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                      Remember me
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
              </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-center disabled" href="#">Esqueceu a senha ?</a>
          </div>
        </div>
      </nav>
      <nav>
        <ul class="nav nav-pills justify-content-center mt-4">
          <li class="nav-item">
            <a class="nav-link" href="home.jsp">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="nivel.jsp">Niveis de acesso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="endereco.jsp">Enderecos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuarios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Usuarios Cadastrados</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="usuarios.jsp">Cadastro</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
  <div class="container mt-5">
      <h2>Novo Nivel de Usuario</h2>
      <hr>
      <form class="needs-validation" action="cadastroNivel.jsp">
        <div class="col-md-12 mb-3">
           <label for="titulo">Titulo</label>
           <input type="text" name="titulo" id="titulo" class="form-control">
        </div>
        <div class="col-md-12 mb-3">
           <label for="descricao">Descricao</label>
           <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>
        <button class="btn btn-success btn-lg btn-block" type="submit">Salvar</button>
      </form>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>


    <header>
      <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="#"><!-- dropdown-menu dropdown-menu-right -->
          JAVA
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
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Niveis de usuario
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="listaNivel.jsp">Niveis Cadastrados</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="nivel.jsp">Niveis de acesso</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="deletarNivel.jsp">Deletar um nivel</a>
            </div>
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


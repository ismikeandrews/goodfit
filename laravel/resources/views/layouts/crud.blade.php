<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/functions.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/b5c17076b7.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <header>
        <nav class="navbar navbar-dark bg-dark">
           <a class="navbar-brand" href="#">
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
              <a class="nav-link <?php if($page=='home'){ echo 'active';}else { echo '';} ?>" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php if($page=='niveis' || $page=='cadastroNivel'){ echo 'active';}else { echo '';} ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Niveis
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/niveis">Niveis Cadastrados</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/niveis/cadastro">Novo nivel de usuario</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page=='enderecos'){ echo 'active';}else { echo '';} ?>" href="/enderecos">Enderecos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php if($page=='usuarioCadastro'){ echo 'active';}else { echo '';} ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Usuarios
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item disabled" href="#">Usuarios Cadastrados</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/usuarios/cadastro">Cadastro</a>
              </div>
            </li>
          </ul>
        </nav>
      </header>
      <main class="py-4">
        @yield('conteudo')
      </main>
    </div>
  </body>
</html>

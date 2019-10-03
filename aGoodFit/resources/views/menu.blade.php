<nav class="menu">
  <div class="container-menu">
    <div class="menu-content">
      <button id="menu-burg" class="menu-nav">
        <span class="menu-nav-burg"></span>
      </button>

      <div id="menu-collapse" class="menu-nav-collapse is-active">
        <div class="menu-nav-collapse-bar">
          <ul class="menu-nav-list">
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <div class="menu-nav-list-link-item-content">
                  <img src="{{asset('images/componentes/menu-vagas.svg')}}" alt="Menu - página de vagas" class="menu-item-img">
                </div>
                <div class="menu-nav-list-link-item-content">
                  <p class="menu-nav-list-link-item-text">Vagas</p>
                </div>
                <div class="menu-nav-list-link-item-content">
                  <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
              </div>
              </li>
            </a>
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <div class="menu-nav-list-link-item-content">
                  <img src="{{asset('images/componentes/menu-curriculo.svg')}}" alt="Menu - página de currículo" class="menu-item-img">
                </div>
                <div class="menu-nav-list-link-item-content">
                  <p class="menu-nav-list-link-item-text">Currículo</p>
                </div>
                <div class="menu-nav-list-link-item-content">
                  <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
                </div>
              </li>
            </a>
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <img src="{{asset('images/componentes/menu-candidatura.svg')}}" alt="Menu - página de candidaturas" class="menu-item-img">
                  <p class="menu-nav-list-link-item-text">Candidaturas</p>
                <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
              </li>
            </a>
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <img src="{{asset('images/componentes/menu-perfil.svg')}}" alt="Menu - página de perfil" class="menu-item-img">
                  <p class="menu-nav-list-link-item-text">Perfil</p>
                <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
              </li>
            </a>
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <img src="{{asset('images/componentes/menu-perfil.svg')}}" alt="Menu - link para sair" class="menu-item-img">
                  <p class="menu-nav-list-link-item-text">Sair</p>
                <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
              </li>
            </a>
          </ul>
        </div>
      </div>
    </div>

    <div class="menu-content">
      <a class="menu-logo-link" href="{{ url('/vagas') }}">
        <div class="menu-logo">
            <img src="{{asset('images/componentes/logo-menu.svg')}}" alt="Logo - A Good Fit" class="menu-logo-img">
        </div>
      </a>
    </div>

    <div class="menu-content">
      <a class="menu-perfil-link" href="{{ url('/perfil') }}">
        <div class="menu-perfil">
            <img src="{{asset('images/componentes/perfil-foto.svg')}}" alt="Imagem do seu perfil" class="menu-perfil-img">
        </div>
      </a>
    </div>






















    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <!-- <div class="collapse menu-nav-collapse" id="menu-nav-links">
      <ul class="navbar-nav ml-auto">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="/nivelusuario/escolha">Registro</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->loginUsuario }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div> -->
</div>
</nav>

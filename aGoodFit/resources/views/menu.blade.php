<nav class="menu">
  <div class="container container-menu">
    <a class="menu-logo-link" href="{{ url('/vagas') }}">
      <div class="menu-logo">
          <img src="{{asset('images/componentes/logo-menu.svg')}}" alt="Logo - A Good Fit" class="logo-img">
      </div>
    </a>
    <button class="menu-nav" data-toggle="collapse" data-target="#menu-nav-links" aria-controls="menu-nav-links" aria-expanded="false">
      <span class="menu-nav-burg"></span>
    </button>
    
    <div class="collapse menu-nav-collapse" id="menu-nav-links">
      <ul class="menu-nav-list">
        <a class="menu-nav-list-link" href="#">
          <li class="menu-nav-list-link-item">
          <img src="{{asset('images/componentes/menu-vagas.svg')}}" alt="Menu - página de vagas" class="menu-item-img">
            Vagas
          <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
          </li>
        </a>
        <a class="menu-nav-list-link" href="#">
          <li class="menu-nav-list-link-item">
          <img src="{{asset('images/componentes/menu-curriculo.svg')}}" alt="Menu - página de currículo" class="menu-item-img">
            Currículo
          <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
          </li>
        </a>
        <a class="menu-nav-list-link" href="#">
          <li class="menu-nav-list-link-item">
          <img src="{{asset('images/componentes/menu-candidatura.svg')}}" alt="Menu - página de candidaturas" class="menu-item-img">
            Candidaturas
          <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
          </li>
        </a>
        <a class="menu-nav-list-link" href="#">
          <li class="menu-nav-list-link-item">
          <img src="{{asset('images/componentes/menu-perfil.svg')}}" alt="Menu - página de perfil" class="menu-item-img">
            Perfil
          <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
          </li>
        </a>
        <a class="menu-nav-list-link" href="#">
          <li class="menu-nav-list-link-item">
          <img src="{{asset('images/componentes/menu-sair.svg')}}" alt="Menu - link para sair" class="menu-item-img">
            Sair
          <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-img">
          </li>
        </a>
    </ul>
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

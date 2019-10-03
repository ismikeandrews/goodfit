<nav class="menu">
  <div class="container-menu">
    <div class="menu-content">
      <button id="menu-burg" class="menu-nav">
        <span class="menu-nav-burg"></span>
      </button>

      <div id="menu-collapse" class="menu-nav-collapse">
        <div class="menu-nav-collapse-bar">
          <ul class="menu-nav-list">
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <img src="{{asset('images/componentes/menu-vagas.svg')}}" alt="Menu - página de vagas" class="menu-item-img">
                  <p class="menu-nav-list-link-item-text">Vagas</p>
                <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-svg">
              </li>
            </a>
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <img src="{{asset('images/componentes/menu-curriculo.svg')}}" alt="Menu - página de currículo" class="menu-item-img">
                  <p class="menu-nav-list-link-item-text">Currículo</p>
                <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-svg">
              </li>
            </a>
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <img src="{{asset('images/componentes/menu-candidatura.svg')}}" alt="Menu - página de candidaturas" class="menu-item-img">
                  <p class="menu-nav-list-link-item-text">Candidaturas</p>
                <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-svg">
              </li>
            </a>
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <img src="{{asset('images/componentes/menu-perfil.svg')}}" alt="Menu - página de perfil" class="menu-item-img">
                  <p class="menu-nav-list-link-item-text">Perfil</p>
                <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-item-svg">
              </li>
            </a>
            <a class="menu-nav-list-link" href="#">
              <li class="menu-nav-list-link-item">
                <img src="{{asset('images/componentes/menu-perfil.svg')}}" alt="Menu - link para sair" class="menu-item-img">
                  <p class="menu-nav-list-link-item-text">Sair</p>
                <img src="{{asset('images/componentes/seta-avancar.svg')}}" alt="Menu - seta para prosseguir" class="menu-itesvgmg">
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
</div>
</nav>

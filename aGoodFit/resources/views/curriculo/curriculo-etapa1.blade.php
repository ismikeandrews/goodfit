
    <div class="curriculo-title">
        Sobre mim
    </div>
    <div class="curriculo-desc">
        Explicar o que é essa sessão
    </div>

    <div class="curriculo-etapa1-submenu">
      <div class="curriculo-etapa1-submenu-item is-active">
        <img src="{{asset('images/componentes/etapa1-video.svg')}}" alt="Currículo - Descrição sobre mim em forma de vídeo" class="curriculo-etapa1-submenu-item-icon">
      </div>

      <div class="curriculo-etapa1-submenu-item">
        <img src="{{asset('images/componentes/etapa1-texto.svg')}}" alt="Currículo - Descrição sobre mim em forma de texto" class="curriculo-etapa1-submenu-item-icon">
      </div>
    </div>

    <div class="curriculo-etapa1-content is-active">       
        <input id="" name="" type="hidden" accept=".mp4, .avi, .mkv, .ogg, .ogm, .mpg, .mpeg, .vob, .bvcd, .bsvcd"> <!--Mike help aqui-->
        <label for='arquivo-video'>
          <div class="curriculo-etapa1-content-video">
            <img src="{{asset('images/icones/video.png')}}" alt="Currículo - Descrição sobre mim em forma de vídeo" class="curriculo-etapa1-content-video-icon">

            <p class="curriculo-etapa1-content-video-desc">
              Clique para enviar um vídeo sobre você
            </p>
          </div>
        </label>
        <input id='arquivo-video' type="file" name="video" class="curriculo-video">
    </div>

    <div class="curriculo-etapa1-content">
      <div class="curriculo-etapa1-content-text">
        <form class="curriculo-etapa1-form" action="index.html" method="post">
          <textarea class="curriculo-etapa1-textarea" placeholder="Escreva uma breve descrição sobre você..."></textarea>
        </form>
      </div>
      <div class="box-hidden">
      </div>
    </div>

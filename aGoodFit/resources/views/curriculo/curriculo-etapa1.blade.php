
    <div class="curriculo-title">
        Sobre mim
    </div>
    <div class="curriculo-desc">
        Fale um pouco sobre você através de um vídeo ou por escrito<span>...</span>
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
        <label for='arquivo-video'>
          <div class="curriculo-etapa1-content-video">
            <img src="{{asset('images/icones/video.png')}}" alt="Currículo - Descrição sobre mim em forma de vídeo" class="curriculo-etapa1-content-video-icon">

            <p class="curriculo-etapa1-content-video-desc">
              Clique para enviar um vídeo sobre você
            </p>
          </div>
        </label>
        <input id='arquivo-video' type="file" name="videoCandidato" class="curriculo-video" accept=".mp4, .avi, .mkv, .ogg, .ogm, .mpg, .mpeg, .vob, .bvcd, .bsvcd">
    </div>

    <div class="curriculo-etapa1-content">
      <div class="curriculo-etapa1-content-text">
          <textarea name="descricaoCandidato" class="curriculo-etapa1-textarea" placeholder="Escreva uma breve descrição sobre você..."></textarea>
      </div>
      <div class="box-hidden">
      </div>
    </div>

<div class="section section-cadastro">
  <div class="cadastro-intro">
    <h3 class="intro-title">Informações pessoais</h3>
    <p class="intro-desc">Talvez você precise de ajuda nessa etapa, pois precisamos de dados do seu documento...</p>
  </div>

  <div class="cadastro-etapa2-content">
    <form method="post">
      @csrf

      <div class="content-perfil">
          <label class="content-perfil-image content-perfil-image-cadastro" for="selecao-arquivo">
            <img src="{{asset('images/componentes/perfil.svg')}}" id="foto-perfil" class="content-perfil-image-img content-perfil-image-img-cadastro @error('foto') content-perfil-image-img-erro @enderror" alt="Insira sua imagem de perfil">
          </label>
          <input id="selecao-arquivo" type="file" name="foto" class="content-perfil-input-foto" accept=".jpg, .jpeg, .png">
          @error('foto')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <div id="modal-cortar" class="container-modal modal">
          <div class="modal-conteudo">
            <div class="modal-conteudo-header">
              <span id="modal-fechar" class="modal-conteudo-header-fechar">&times;</span>
            </div>
            <div class="modal-conteudo-body">
              <div id="image_demo">

              </div>
              <button type="button" class="btn modal-btn-cortar crop_image" name="button">Cortar e salvar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="content-perfil-desc">
        <div class="content-perfil-desc-item">
          Nome
          <input class="form-input-item form-input-item-perfil @error('nome') is-invalid @enderror" type="text"  name="nome" value="{{ old('nome') }}" autocomplete="nome" autofocus>
            @error('nome')
            <span class="erro" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="content-perfil-desc-box">
            <div class="content-perfil-desc-item content-perfil-desc-box-item">
              RG
              <input class="form-input-item form-input-item-perfil @error('rg') is-invalid @enderror" type="text" name="rg" value="{{ old('rg') }}" autocomplete="rg" autofocus>
                @error('rg')
                <span class="erro" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="content-perfil-desc-item content-perfil-desc-box-item">
                CPF
                <input class="form-input-item form-input-item-perfil @error('cpf') is-invalid @enderror" type="text" name="cpf" data-mask="000.000.000-00" value="{{ old('cpf') }}" autocomplete="cpf" autofocus>
                @error('cpf')
                <span class="erro" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
      </div>

    </form>
  </div>
</div>

<div class="section section-cadastro">
  <div class="cadastro-intro">
    <h3 class="intro-title">Informações pessoais</h3>
    <p class="intro-desc">Talvez você precise de ajuda nessa etapa, pois precisamos de dados do seu documento...</p>
  </div>

  <div class="cadastro-etapa2-content">

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

          <div class="content-perfil-desc-item content-perfil-desc-box-item">
            Data de Nascimento
            <input class="form-input-item form-input-item-perfil @error('nascimento') is-invalid @enderror" type="text" name="nascimento" data-mask="00/00/0000" value="{{ old('nascimento') }}" autocomplete="nascimento" autofocus>
            @error('nascimento')
            <span class="erro" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
      </div>
  </div>
</div>

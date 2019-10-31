<div class="section section-cadastro">
  <div class="cadastro-intro">
    <h3 class="intro-title">Informações da conta</h3>
    <p class="intro-desc">Agora vamos configurar a sua conta...</p>
  </div>

  <div class="cadastro-etapa2-content">
    <form method="post">
      @csrf

      <div class="content-perfil-desc">
        <div class="content-perfil-desc-item">
          Login
          <input class="form-input-item form-input-item-perfil @error('login') is-invalid @enderror" id="login" type="text" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
          @error('login')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="content-perfil-desc-item">
          Email
          <input class="form-input-item form-input-item-perfil @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="content-perfil-desc-item">
          Senha
          <input class="form-input-item form-input-item-perfil @error('password') is-invalid @enderror" type="password" id="senha" name="senha" value="{{ old('senha') }}" autocomplete="senha" autofocus>
          @error('password')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="content-perfil-desc-item">
          Confirmar senha
          <input class="form-input-item form-input-item-perfil @error('password') is-invalid @enderror" type="password" id="confirmar-senha" name="password_confirmation" value="{{ old('senha') }}" autocomplete="password_confirmation" autofocus>
          @error('password')
          <span class="erro" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

    </form>
  </div>
</div>

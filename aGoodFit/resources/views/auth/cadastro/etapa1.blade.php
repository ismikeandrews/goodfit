<div class="section section-cadastro">
  <div class="cadastro-intro">
    <h3 class="intro-title">Seja bem-vindo!</h3>
    <p class="intro-desc">Para começarmos, informe-nos que tipo de usuário você é:</p>
  </div>
  
  <div class="cadastro-etapa1-content">
    <div class="cadastro-etapa1-content-item">
      <input id="candidato" class="radio radio-cadastro" name="codNivelUsuario" type="radio" value="2">
      <label class="radio-label" for="candidato">
        <img src='{{asset("images/icones/boy.png")}}' alt="Candidato" class="radio-label-icon">
        <p class="radio-label-desc">
          Candidato
        </p>
      </label>
    </div>
    
    <div class="cadastro-etapa1-content-item">
      <input id="empresa" class="radio radio-cadastro" name="codNivelUsuario" type="radio" value="1">
      <label class="radio-label" for="empresa">
        <img src='{{asset("images/icones/empresa.png")}}' alt="Empresa" class="radio-label-icon">
        <p class="radio-label-desc">
          Empresa
        </p>
      </label>
    </div>
  </div>
</div>
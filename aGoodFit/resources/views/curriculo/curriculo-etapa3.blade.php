<div class="curriculo-title">
    Objetivo profissional
  </div>
  <div class="curriculo-desc">
    Gostaria de trabalhar com<span>...</span>
  </div>
  <div class="curriculo-etapa3">
    @foreach ($categorias as $categoria)
    <div class="curriculo-content-item">
        <input value="{{$categoria->codCategoria}}" type="checkbox" id="objetivo-{{$categoria->nomeCategoria}}" class="curriculo-checkbox" />
        <label class="curriculo-content-item-label" for="objetivo-{{$categoria->nomeCategoria}}">
          <img src='{{asset("images/icones/profissao/$categoria->imagemCategoria")}}' alt="Objetivo Profissional - {{$categoria->nomeCategoria}}" class="curriculo-content-item-label-icon">
          <p class="curriculo-content-item-label-desc">
            {{$categoria->nomeCategoria}}
          </p>
        </label>
    </div>
    @endforeach
  </div>
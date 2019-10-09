<div class="curriculo-title">
    Habilidades
</div>
<div class="curriculo-desc">
    Eu sou bom com<span>...</span>
</div>

<div class="curriculo-etapa2">
    @foreach ($habilidades as $habilidade)
        <div class="curriculo-content-item">
            <input value="{{$habilidade->codAdicional}}" type="checkbox" id="habilidade-{{$habilidade->nomeAdicional}}" class="curriculo-checkbox" />
            <label class="curriculo-content-item-label" for="habilidade-{{$habilidade->nomeAdicional}}">
                <img src='{{asset("images/icones/habilidades/$habilidade->imagemAdicional")}}' alt="Habilidades - Bom com {{$habilidade->nomeAdicional}}" class="curriculo-content-item-label-icon">
                <p class="curriculo-content-item-label-desc">
                    {{$habilidade->nomeAdicional}}
                </p>
            </label>
        </div>
    @endforeach
</div>
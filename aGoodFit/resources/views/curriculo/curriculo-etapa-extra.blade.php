<div class="curriculo-title">
    Requisitos
  </div>
<div class="curriculo-desc">
   Formações básicas em<span>...</span>
</div>

<div class="curriculo-etapa4">

    <div class="curriculo-content-item curriculo-content-item-etapa-4" id="requisito-escolaridade">
        <div class="curriculo-select-arrow">
            <div class="curriculo-select js-curriculo-parent">
              <label class="curriculo-content-item-label curriculo-select-box">
                  <img src='{{asset("images/icones/requisitos/escolaridade.png")}}' alt="Requisito - Nível de escolaridade" class="curriculo-content-item-label-icon">
                  <div class="curriculo-select-content js-curriculo-text">
                    Escolaridade
                  </div>
              </label>

              <div class="curriculo-select-list js-curriculo-list">
                <div class="curriculo-select-list-content js-curriculo-list-content">
                  @foreach ($escolaridades as $escolaridade)
                    <div data-value="{{$escolaridade->codAdicional}}" class="curriculo-select-list-item js-curriculo-list-item">
                        {{$escolaridade->nomeAdicional}}
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>


    <div class="curriculo-content-item curriculo-content-item-etapa-4" id="requisito-alfabetizacao">
        <div class="curriculo-select-arrow">
            <div class="curriculo-select js-curriculo-parent">
                <label class="curriculo-content-item-label curriculo-select-box">
                    <img src='{{asset("images/icones/requisitos/alfabetizacao.png")}}' alt="Requisito - Nível de alfabetização" class="curriculo-content-item-label-icon curriculo-etapa-4-icon">
                    <div class="curriculo-select-content js-curriculo-text">
                      Alfabetização
                    </div>
                </label>

                <div class="curriculo-select-list js-curriculo-list">
                    @foreach ($alfabetizacoes as $alfabetizacao)
                      <div data-value="{{$alfabetizacao->codAdicional}}" class="curriculo-select-list-item js-curriculo-list-item">
                          {{$alfabetizacao->nomeAdicional}}
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

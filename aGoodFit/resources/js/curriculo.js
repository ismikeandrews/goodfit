/* Curriculo - Submenu etapas */
const submenu = document.querySelectorAll('.curriculo-etapa1-submenu-item');
const content = document.querySelectorAll('.curriculo-etapa1-content');

submenu.forEach((elem, idx) => {
  submenu[idx].addEventListener('click', function() {
    if (submenu[0].classList.contains('is-active')) {
      submenu[0].classList.remove('is-active');
      submenu[1].classList.add('is-active');
      content[0].classList.remove('is-active');
      content[1].classList.add('is-active');
    }else {
      submenu.forEach(elem => {
        submenu[0].classList.add('is-active');
        submenu[1].classList.remove('is-active');
        content[0].classList.add('is-active');
        content[1].classList.remove('is-active');
      });
    }
  });
});












/* Curriculo - Botões */
const etapa = document.querySelectorAll('.counter-etapas-etapa');
const etapaContent = document.querySelectorAll('.counter-etapas-content');
const btnAvancar = document.querySelector('#btn-avancar');
const btnVoltar = document.querySelector('#btn-voltar');

/* Curriculo - Botão Avançar */
let linha = 1;
let conteudo = 0;

if (etapa) {
  btnAvancar.addEventListener('click', function() {
    etapa[linha].classList.remove('is-disable');
    etapaContent[conteudo].classList.remove('is-active');
    linha += 1;
    conteudo += 1;
    etapaContent[conteudo].classList.add('is-active');
  });

  // btnAvancar.addEventListener('click', function() {
  //   etapaContent.forEach((elem, idx) => {
  //     if (etapaContent[idx].classList.contains('is-active')) {
  //       etapaContent[idx].classList.remove('is-active');
  //       idx += 1;
  //       etapa[idx].classList.remove('is-disable');
  //       etapaContent[idx].classList.add('is-active');
  //     }
  //   });
  // });

  /* Curriculo - Botão Voltar */
  btnVoltar.addEventListener('click', function() {
    etapaContent.forEach((elem, idx) => {
      if (idx > 0) {
        btnVoltar.classList.remove('is-disable');

        if (etapaContent[idx].classList.contains('is-active')) {
          etapa[idx].classList.add('is-disable');
          etapaContent[idx].classList.remove('is-active');
          idx -= 1;
          etapaContent[idx].classList.add('is-active');
        }
      }else {
        btnVoltar.classList.add('is-disable');
      }
    });
  });
}

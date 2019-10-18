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

let linha = 0;
let conteudo = 0;

/* Curriculo - Botão Avançar */
btnAvancar.addEventListener('click', function(e) {
  if (!((etapa.length - 1) === linha)) {
    e.preventDefault();
    etapa[linha + 1].classList.remove('is-disable');
    etapaContent[conteudo].classList.remove('is-active');
    linha += 1;
    conteudo += 1;
    etapaContent[conteudo].classList.add('is-active');
  }
  if (etapa.length - 1 === linha){
    btnAvancar.innerHTML = 'Concluir';
    btnAvancar.type = 'submit';
  }
  if (linha > 0) {
    btnVoltar.classList.remove('is-disable');
  }
  window.scroll(0, 0);
});

/* Curriculo - Botão Voltar */
btnVoltar.addEventListener('click', function() {
  if (etapa.length - 1 === linha){
    btnAvancar.innerHTML = 'Avançar'
  }
  if (linha > 0) {
    etapa[linha].classList.add('is-disable');
    etapaContent[conteudo].classList.remove('is-active');
    linha -= 1;
    conteudo -= 1;
    etapaContent[conteudo].classList.add('is-active');
  }
  if (linha === 0) {
    btnVoltar.classList.add('is-disable');
  }
  window.scroll(0, 0);
});

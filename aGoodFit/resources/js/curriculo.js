const etapa = document.querySelectorAll('.counter-etapas-etapa');
const etapaContent = document.querySelectorAll('.counter-etapas-content');
const btnAvancar = document.querySelector('#btn-avancar');
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

  // btnVoltar.addEventListener('click', function() {
  //     etapa[linha].classList.add('is-disable');
  //     etapaContent[conteudo].classList.add('is-active');
  //     linha -= 1;
  //     conteudo -= 1;
  //     etapaContent[conteudo].classList.remove('is-active');
  // });
}





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

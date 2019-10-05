const etapa = document.querySelectorAll('.counter-etapas-etapa');
const btnNext = document.querySelector('#btn-next');
let fase = 1;

if (etapa) {
  btnNext.addEventListener('click', function() {
      etapa[fase].classList.remove('is-disable');
      fase += 1;
  });
}


const submenu = document.querySelectorAll('.curriculo-etapa1-submenu-item');

if (submenu) {
  if (submenu.classList.contains('is-active')) {
      submenu.forEach((elem, idx) => {
          elem.classList.remove('is-active');
      });
  } else {
    elem.classList.add('is-active');
  }
}

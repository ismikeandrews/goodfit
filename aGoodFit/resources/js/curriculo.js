const etapa = document.querySelectorAll('.counter-etapas-etapa');
const btnNext = document.querySelector('.btn-next');
let fase = 1;

btnNext.addEventListener('click', function() {
    etapa[fase].classList.remove('is-disable');
    fase += 1;
});
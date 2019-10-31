const btnNext = document.querySelector('#btn-next');
const btnPrev = document.querySelector('#btn-prev');
const counterCadastro = document.querySelectorAll('.counter-etapas-etapa');
const contents = document.querySelectorAll('.counter-etapas-content');

if (counterCadastro) {
  let idx = 0;
  let contentsLength = contents.length;

  btnNext.addEventListener('click', () => {
    if (idx + 1 < contentsLength) {
      contents[idx].classList.remove('is-active');
      btnPrev.classList.remove('is-disable');
      idx++;
      contents[idx].classList.add('is-active');
      counterCadastro[idx].classList.remove('is-disable');
      
      if (idx + 1 == contentsLength) {
        btnNext.innerHTML = 'Concluir';
        btnNext.type = 'submit';
      }
    }
  })

  btnPrev.addEventListener('click', () => {
    if (idx - 1 >= 0) {
      counterCadastro[idx].classList.add('is-disable');
      contents[idx].classList.remove('is-active');
      idx--;
      contents[idx].classList.add('is-active');

      if (idx == 0) {
        btnPrev.classList.add('is-disable');
      }
    }
  })
}

const btnNext = document.querySelector('#btn-next');
const btnPrev = document.querySelector('#btn-prev');

const contents = document.querySelectorAll('.counter-etapas-content');

let idx = 0;
let contentsLength = contents.length;

btnNext.addEventListener('click', () => {
  if (idx + 1 < contentsLength) {
    contents[idx].classList.remove('is-active');
    idx++;
    contents[idx].classList.add('is-active');
  } else {
    console.log('acabou pra frente')
  }
})

btnPrev.addEventListener('click', () => {
  if (idx - 1 >= 0) {
    contents[idx].classList.remove('is-active');
    idx--;
    contents[idx].classList.add('is-active');
  } else {
    console.log('acabou pra trás')
  }
})

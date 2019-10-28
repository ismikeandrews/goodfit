const listCurriculoParent = document.querySelectorAll('.js-curriculo-parent');
const listCurriculoAll = document.querySelectorAll('.js-curriculo-list');

listCurriculoParent.forEach((elem, idx) => {
  const listCurriculoText = elem.querySelector('.js-curriculo-text');
  const listCurriculo = elem.querySelector('.js-curriculo-list');
  const listCurriculoContent = elem.querySelector('.js-curriculo-list-content');
  const listCurriculoItem = elem.querySelectorAll('.js-curriculo-list-item');

  listCurriculoText.addEventListener('click', () => {
    if (listCurriculo.classList.contains('is-active')) {
      listCurriculo.classList.remove('is-active');
      listCurriculo.style.height = '0';
    } else {
      listCurriculo.classList.add('is-active');
      let height = listCurriculoContent.offsetHeight;
      listCurriculo.style.height = `${height + 60}px`;
    }

    listCurriculoAll.forEach((elem, idx) => {
      if (elem !== listCurriculo && elem.classList.contains('is-active')) {
        elem.classList.remove('is-active');
        listCurriculo.style.height = '0';
      }
    });
  });

  listCurriculoItem.forEach((elem, idx) => {
    elem.addEventListener('click', () => {
      var dataValue = elem.getAttribute('data-value');
      var dataText = elem.innerHTML;

      listCurriculoText.innerHTML = `${dataText}`;

      listCurriculo.classList.remove('is-active');
      listCurriculo.style.height = '0';
    });
  });
});
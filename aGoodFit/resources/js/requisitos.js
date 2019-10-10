const listCurriculoParent = document.querySelectorAll('.js-curriculo-parent');
const listCurriculoContentAll = document.querySelectorAll('.js-curriculo-list');

listCurriculoParent.forEach((elem, idx) => {
  const listCurriculoText = elem.querySelector('.js-curriculo-text');
  const listCurriculoContent = elem.querySelector('.js-curriculo-list');
  const listCurriculoItem = elem.querySelectorAll('.js-curriculo-list-item');

  listCurriculoText.addEventListener('click', () => {
    listCurriculoContent.classList.toggle('is-active');

    listCurriculoContentAll.forEach((elem, idx) => {
      if (elem !== listCurriculoContent && elem.classList.contains('is-active')) {
        elem.classList.remove('is-active');
      }
    });
  });

  listCurriculoItem.forEach((elem, idx) => {
    elem.addEventListener('click', () => {
      var dataValue = elem.getAttribute('data-value');
      var dataText = elem.innerHTML;

      listCurriculoText.innerHTML = `${dataText}`;

      listCurriculoContent.classList.remove('is-active');
    });
  });
});
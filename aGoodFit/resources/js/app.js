/* Importando JavaScript */

const containerCadastro = document.querySelector('.container-cadastro');
const containerCurriculo = document.querySelector('.container-curriculo');
const containerRequisitos = document.querySelector('.container-requisitos');
const containerVagas = document.querySelector('.container-vagas');
const containerModal = document.querySelector('.container-modal');

require('./menu');

if (containerCadastro) {
  require('./cadastro');
}

if (containerCurriculo) {
  require('./curriculo');
}

if (containerRequisitos) {
  require('./requisitos');
}

if (containerVagas) {
  require('./vagas');
}

if (containerModal) {
  require('./modal');
}

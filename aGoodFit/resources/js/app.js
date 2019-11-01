/* Importando JavaScript */

const containerCadastro = document.querySelector('.container-cadastro');
const containerCurriculo = document.querySelector('.container-curriculo');
const containerRequisitos = document.querySelector('.container-requisitos');
const containerVagas = document.querySelector('.container-vagas');
const containerModal = document.querySelector('.container-modal');
const containerPerfil = document.querySelector('.container-perfil');


require('./menu');

if (containerCadastro) {
  require('./cadastro');
}

if (containerCurriculo) {
  require('./curriculo');
}

if (containerPerfil) {
  require('./foto-upload');
}

if (containerModal) {
  require('./modal');
}


if (containerRequisitos) {
  require('./requisitos');
}

if (containerVagas) {
  require('./vagas');
  require('./slide');
}

/* Importando JavaScript */

const containerCadastro = document.querySelector('.container-cadastro');
const containerCurriculo = document.querySelector('.container-curriculo');
const containerRequisitos = document.querySelector('.container-requisitos');
const containerEndereco = document.querySelector('.container-endereco');
const containerModal = document.querySelector('.container-modal');
const containerVagas = document.querySelector('.container-vagas');
const containerPerfil = document.querySelector('.container-perfil');


require('./menu');

if (containerCadastro) {
  require('./cadastro');
}

if (containerCurriculo) {
  require('./curriculo');
}

if (containerPerfil || containerCadastro) {
  require('./foto-upload');
}

if (containerModal) {
  require('./modal');
}

if (containerEndereco) {
  require('./busca-cep');
}

if (containerRequisitos) {
  require('./requisitos');
}

if (containerVagas) {
  require('./vagas');
}

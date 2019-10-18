const modal = document.querySelector("#modal-cortar");
const fecharModal = document.querySelector("#modal-fechar");
const inputFile = document.querySelector('#selecao-arquivo');

if (modal) {
  fecharModal.addEventListener('click', closeModal);
  window.addEventListener('click', clickOutside);

  function openModal(){
    modal.style.display = 'block';
  }

  function closeModal(){
    modal.style.display = 'none';
  }

  function clickOutside(e){
    if (e.target == modal) {
      modal.style.display = 'none';
    }
  }

}

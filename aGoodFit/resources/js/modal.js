const modal = document.getElementById("modal-cortar");
const abrirModal = document.getElementById("abrirModal");
const fecharModal = document.getElementById("modal-fechar");

abrirModal.addEventListener('click', openModal);
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

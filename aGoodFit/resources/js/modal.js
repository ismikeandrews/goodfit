const modal = document.getElementsByClassName('modal')[0];
const box = document.getElementsByClassName('status-box')[0];
const close = document.getElementsByClassName('modal-content-header-close')[0];

box.addEventListener('click', openModal);
close.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

function openModal(){
  modal.style.display = 'block';
}

function closeModal(){
  modal.style.display = 'none';
}

function outsideClick(e){
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}

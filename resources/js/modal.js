const modal = document.querySelectorAll('.modal');
const openModal = document.querySelectorAll('.status-box');
const closeModal = document.querySelectorAll('.modal-content-header-close');
const container = document.querySelectorAll('.container');

if (modal) {
  openModal.forEach((elem, idx) => {
    elem.addEventListener('click', function() {
    modal[idx].classList.add('is-active');
    });
  });

  closeModal.forEach((elem, idx) => {
    elem.addEventListener('click', function() {
      modal[idx].classList.remove('is-active');
    });
  });
}

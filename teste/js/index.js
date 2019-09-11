function funcionalidades() {
  let modal = document.querySelector(".modal-content");
  let openModal = document.querySelector(".menu-item-login");
  let closeModal = document.querySelector(".modal-close-link");
  const bg = document.querySelector(".everything");

  openModal.onclick = function() {
    modal.style.display = "block";
    bg.classList.add('bg-dark');
  };

  closeModal.onclick = function() {
    modal.style.display = "none";
    bg.classList.remove('bg-dark');
  };

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}

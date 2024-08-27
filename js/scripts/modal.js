// Seleciona os elementos do modal, botão de fechar e overlay
const btnFecharModal = document.querySelector(".js-btn-close");
const modal = document.querySelector(".js-modal");
const overlay = document.querySelector(".overlay");

let modalExibido = false;

// Função para exibir o modal
function showModal() {
  if (modal) {
    modal.classList.add("show");
  }
}

function closeModal() {
  if (modal) {
    modal.classList.remove("show");
  }
}

btnFecharModal?.addEventListener("click", closeModal);

overlay?.addEventListener("click", (event) => {
  if (event.target === overlay) {
    closeModal();
  }
});

window.addEventListener("mouseout", (event) => {
  if (event.clientY <= 0 && !modalExibido) {
    showModal();
    modalExibido = true;
  }
});

// js/curiosidades.js

import { curiosidades } from './curiosidades.js';

document.addEventListener("DOMContentLoaded", () => {
    const btnVoltar = document.getElementById("btnVoltar");
    const confirmRedirect = document.getElementById("confirmRedirect");

    if (!btnVoltar || !confirmRedirect) {
        console.error("Botões não encontrados no DOM.");
        return;
    }

    btnVoltar.addEventListener("click", function (e) {
        e.preventDefault();
        gerarCuriosidade();
        const modal = new bootstrap.Modal(document.getElementById('exitModal'));
        modal.show();
    });

    confirmRedirect.addEventListener("click", function () {
        window.location.href = "index.php";
    });
});

function gerarCuriosidade() {
    const item = curiosidades[Math.floor(Math.random() * curiosidades.length)];
    const modalBody = document.querySelector("#exitModal .modal-body");

    modalBody.innerHTML = `
    <h5 class="fw-bold mb-3">${item.titulo}</h5>
    <p class="mb-3">${item.texto}</p>
    <p class="text-muted fst-italic">${item.gancho}</p>
  `;
}




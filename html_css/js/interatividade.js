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
    <p class="mb-2">${item.texto}</p>
    <p class="mb-3">Teste seus conhecimentos:</p>
    <p><strong>${item.pergunta}</strong></p>
    <div id="opcoesQuiz"></div>
    <div id="explicacaoQuiz" class="mt-3 text-info fw-semibold"></div>
  `;

    const opcoesContainer = modalBody.querySelector("#opcoesQuiz");
    const explicacaoEl = modalBody.querySelector("#explicacaoQuiz");

    item.opcoes.forEach(opcao => {
        const btn = document.createElement("button");
        btn.className = "btn btn-outline-primary btn-sm me-2 mb-2";
        btn.textContent = opcao;
        btn.dataset.opcao = opcao;

        btn.addEventListener("click", () => {
            const todosBotoes = opcoesContainer.querySelectorAll("button");
            todosBotoes.forEach(b => b.disabled = true);

            if (opcao === item.resposta) {
                btn.classList.add("btn-success");
                btn.textContent = "✔️ Correto!";
                explicacaoEl.textContent = item.explicacao;
            } else {
                btn.classList.add("btn-danger");
                btn.textContent = "❌ Errado!";
                todosBotoes.forEach(b => {
                    if (b.dataset.opcao === item.resposta) {
                        b.classList.remove("btn-outline-primary");
                        b.classList.add("btn-success");
                        b.textContent = "✔️ Correto!";
                    }
                });
                explicacaoEl.innerHTML = `A resposta correta era <strong>${item.resposta}</strong>. ${item.explicacao}`;
            }
        });

        opcoesContainer.appendChild(btn);
    });
}

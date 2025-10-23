// 🌙 Aplica modo escuro ao carregar, se estiver salvo no localStorage
document.addEventListener("DOMContentLoaded", function () {
    // Ativa tooltips do Bootstrap com posição fixa embaixo
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl, {
            placement: 'bottom',
            fallbackPlacements: [], // impede reposicionamento automático
            boundary: 'window' // respeita os limites da janela
        });
    });

    const isDarkSaved = localStorage.getItem("modo") === "dark";
    if (isDarkSaved) {
        document.body.classList.add("dark-mode");
        document.documentElement.setAttribute("data-bs-theme", "dark");

        // Troca todas as logos com a classe .logo-startplay
        const logos = document.querySelectorAll(".logo-startplay");
        logos.forEach(logo => {
            logo.src = "img/logo-pp3.png";
        });

        // Troca a chave inglesa
        const chave = document.getElementById("chave-inglesa");
        if (chave) chave.src = "img/chave-inglesa-dark.png";

        // Troca o ícone do botão para lua
        const icon = document.querySelector(".toggle-btn i");
        if (icon) {
            icon.classList.remove("bi-sun-fill");
            icon.classList.add("bi-moon-fill");
        }
    }
});

// 🔄 Alterna entre modo claro/escuro e atualiza elementos visuais
function toggleDarkMode() {
    document.body.classList.toggle("dark-mode");
    const isDark = document.body.classList.contains("dark-mode");

    // Atualiza tema do Bootstrap
    document.documentElement.setAttribute("data-bs-theme", isDark ? "dark" : "light");

    // Salva preferência no localStorage
    localStorage.setItem("modo", isDark ? "dark" : "light");

    // Troca todas as logos com a classe .logo-startplay
    const logos = document.querySelectorAll(".logo-startplay");
    logos.forEach(logo => {
        logo.src = isDark ? "img/logo-pp3.png" : "img/logo-pp2.png";
    });

    // Troca a chave inglesa
    const chave = document.getElementById("chave-inglesa");
    if (chave) {
        chave.src = isDark ? "img/chave-inglesa-dark.png" : "img/chave-inglesa-pp.png";
    }

    // Troca o ícone do botão entre sol e lua com animação
    const icon = document.querySelector(".toggle-btn i");
    if (icon) {
        icon.classList.toggle("bi-sun-fill", !isDark);
        icon.classList.toggle("bi-moon-fill", isDark);
    }
}

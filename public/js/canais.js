document.addEventListener("DOMContentLoaded", () => {
    const botoes = document.querySelectorAll(".btn_canais button");
    const divs = [
        document.getElementById("div1"),
        document.getElementById("div2"),
    ];

    function mostrarDiv(index) {
        divs.forEach((div, i) => {
            div.style.display = i === index ? "block" : "none";
        });

        botoes.forEach((btn, i) => {
            btn.classList.toggle("ativo", i === index);
        });
    }

    botoes.forEach((btn, i) => {
        btn.addEventListener("click", () => mostrarDiv(i));
    });

    mostrarDiv(0);
});
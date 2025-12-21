// Função para menu hambúrguer (mobile)
function toggleMenu() {
    var menu = document.querySelector(".navegation");
    var menuIcon = document.getElementById("menu-icon");
    var closeIcon = document.getElementById("close-icon");
    var header = document.querySelector("header");

    menu.classList.toggle("active");

    if (menu.classList.contains("active")) {
        menuIcon.style.display = "none";
        closeIcon.style.display = "flex";
        const headerHeight = header.offsetHeight;
        menu.style.top = `${headerHeight}px`;
    } else {
        menuIcon.style.display = "flex";
        closeIcon.style.display = "none";
    }
}

const header = document.querySelector("header");
const menu = document.querySelector(".navegation");

const observer = new ResizeObserver(() => {
    if (menu.classList.contains("active")) {
        const headerHeight = header.offsetHeight;
        menu.style.top = `${headerHeight}px`;
    }
});

observer.observe(header);

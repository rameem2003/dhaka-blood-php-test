const tog_menu = document.getElementById("tog_menu");
const menu = document.getElementById("menu");


tog_menu.addEventListener("click", () => {
    menu.classList.toggle("active");
})
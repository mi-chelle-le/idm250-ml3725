console.log('main.js loaded!')

const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".navdiv .menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  menu.classList.toggle("active");
});

document.querySelectorAll(".menu-item").forEach(item => {
  item.addEventListener("click", () => {
    hamburger.classList.remove("active");
    menu.classList.remove("active");
  });
});
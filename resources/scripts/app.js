const menu = document.querySelector(".navigation-menu");
const hamburger = document.querySelector(".menu-icon");
const cross = document.querySelector(".cross-icon");

hamburger.addEventListener("click", e => {
  menu.classList.add("appear");
});

cross.addEventListener("click", e => {
  menu.classList.remove("appear");
});

const menu = document.querySelector(".navigation-menu");
const hamburger = document.querySelector(".menu-icon");

hamburger.addEventListener("click", e => {
  menu.classList.toggle("appear");
  console.log("hi");
});

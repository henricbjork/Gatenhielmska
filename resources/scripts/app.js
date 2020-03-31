const menu = document.querySelector(".navigation-menu");
const hamburger = document.querySelector(".menu-icon");
const cross = document.querySelector(".cross-icon");

hamburger.addEventListener("click", e => {
  menu.classList.add("appear");
});

cross.addEventListener("click", e => {
  menu.classList.remove("appear");
});

const newsParagraph = document.querySelector(".news-card-paragraph");
const readMoreNews = document.querySelector(".news-read-more-button");
const readLessNews = document.querySelector(".news-read-less-button");

readMoreNews.addEventListener("click", () => {
  newsParagraph.classList.add("visible");
  readMoreNews.classList.add("hidden");
  readLessNews.classList.remove("hidden");
});

readLessNews.addEventListener("click", () => {
  newsParagraph.classList.remove("visible");
  readMoreNews.classList.remove("hidden");
  readLessNews.classList.add("hidden");
});

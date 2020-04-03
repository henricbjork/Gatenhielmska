const menu = document.querySelector(".navigation-menu");
const hamburger = document.querySelector(".menu-icon");
const cross = document.querySelector(".cross-icon");

hamburger.addEventListener("click", e => {
  menu.classList.add("appear");
});

cross.addEventListener("click", e => {
  menu.classList.remove("appear");
});

const newsCards = document.querySelectorAll(".news-card");

newsCards.forEach(card => {
  const readMoreButton = card.querySelector(".news-read-more-button");
  const readLessButton = card.querySelector(".news-read-less-button");
  const newsParagraph = card.querySelector(".news-card-paragraph");
  readMoreButton.addEventListener("click", () => {
    newsParagraph.classList.add("visible");
    readMoreButton.classList.add("hidden");
    readLessButton.classList.remove("hidden");
  });
  readLessButton.addEventListener("click", () => {
    newsParagraph.classList.remove("visible");
    readMoreButton.classList.remove("hidden");
    readLessButton.classList.add("hidden");
  });
});

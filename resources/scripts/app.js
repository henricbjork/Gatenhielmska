const menu = document.querySelector(".navigation-menu");
const hamburger = document.querySelector(".menu-icon");
const cross = document.querySelector(".cross-icon");
const eventCards = document.querySelectorAll(".event-card-wrapper");
const showGallery = document.querySelector(".gallery-header");

if (showGallery != null) {
  const gallery = document.querySelector(".gallery-images");
  const shrinkBtn = document.querySelector(".shrink-btn");
  showGallery.addEventListener("click", e => {
    gallery.classList.add("show-gallery");
  });
  shrinkBtn.addEventListener("click", e => {
    gallery.classList.remove("show-gallery");
  });
}

if (eventCards != null) {
  eventCards.forEach(eventCard => {
    const eventReadMoreBtn = eventCard.querySelector(".event-read-more");
    const expandedEvent = eventCard.querySelector(".event-card-expanded");
    const eventThumbnail = eventCard.querySelector(".thumbnail-image");
    const eventShortInfo = eventCard.querySelector(".event-short-info");
    const eventDate = eventCard.querySelector(".event-date");
    const parent = eventReadMoreBtn.parentNode;
    console.log(parent);

    const eventReadLessBtn = document.createElement("img");
    eventReadLessBtn.src =
      "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSvXFyoZtK_VRlR4KjDwosRN_ZB_ZouuvxCe-g7uhABpOqUrEE6&usqp=CAU";
    eventReadLessBtn.style.width = "20px";
    eventReadLessBtn.style.height = "20px";

    eventReadMoreBtn.addEventListener("click", e => {
      parent.replaceChild(eventReadLessBtn, eventReadMoreBtn);

      expandedEvent.classList.add("expand");
      eventThumbnail.classList.add("image-appear");
      eventShortInfo.classList.add("hide");
      eventDate.classList.add("event-date-expanded");
    });

    eventReadLessBtn.addEventListener("click", e => {
      expandedEvent.classList.remove("expand");
      eventThumbnail.classList.remove("image-appear");
      eventShortInfo.classList.remove("hide");
      eventDate.classList.remove("event-date-expanded");
      parent.replaceChild(eventReadMoreBtn, eventReadLessBtn);
    });
  });
}

hamburger.addEventListener("click", e => {
  menu.classList.add("appear");
});

cross.addEventListener("click", e => {
  menu.classList.remove("appear");
});

const newsCards = document.querySelectorAll(".news-card");

if (newsCards != null) {
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
}

// onclick news filter.

const filterNewsContent = document.querySelector(".filter-content");
const filterNewsButton = document.querySelector(".news-filter");

if (filterNewsButton != null) {
  filterNewsButton.addEventListener("click", () => {
    filterNewsContent.classList.toggle("toggle-filter");
    filterNewsButton.classList.toggle("news-filter-borders");
  });
}

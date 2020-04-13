const menu = document.querySelector(".navigation-menu");
const hamburger = document.querySelector(".menu-icon");
const cross = document.querySelector(".cross-icon");
const searchForm = document.querySelector(".search-form");
const searchIcon = document.querySelector(".search-icon");
const eventCards = document.querySelectorAll(".event-card-wrapper");
const showGallery = document.querySelector(".gallery-header");
const showVideos = document.querySelector(".video-header");
const tourButton = document.querySelector(".tour-button");
const tourForm = document.querySelector(".tour-form");

searchIcon.addEventListener("click", () => {
  searchForm.classList.toggle("hidden");
});

if (showGallery != null) {
  const gallery = document.querySelector(".gallery-images");
  const videos = document.querySelector(".gallery-videos");
  showGallery.addEventListener("click", e => {
    gallery.classList.toggle("show-gallery");
  });
  showVideos.addEventListener("click", e => {
    videos.classList.toggle("show-videos");
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

    const eventReadLessBtn = document.createElement("button");
    eventReadLessBtn.innerHTML = "Läs mindre";
    eventReadLessBtn.classList.add("event-read-more"); //This is to get same styling on the new button as the old

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

if (tourButton != null) {
  tourButton.addEventListener("click", e => {
    tourForm.classList.toggle("show-tour");
    tourButton.classList.toggle("tour-button-change");
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

// Timeline

const eventWrapper = document.querySelector(".event-wrapper");
const aboutButtonHistory = document.querySelector(".about-button-history");
const aboutReadLessButton = document.querySelector(".about-read-less-button");

aboutButtonHistory.addEventListener("click", () => {
  aboutButtonHistory.classList.add("hidden");
  aboutReadLessButton.classList.remove("hidden");
  eventWrapper.classList.add("visible");
  aboutReadLessButton.addEventListener("click", () => {
    aboutButtonHistory.classList.remove("hidden");
    aboutReadLessButton.classList.add("hidden");
    eventWrapper.classList.remove("visible");
    window.scrollTo(pageXOffset, 400);
  });
});

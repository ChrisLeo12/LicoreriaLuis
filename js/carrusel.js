let slideIndex = 0;

function showSlides() {
  const slides = document.getElementsByClassName("slide");
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  } else if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";
  slideIndex++;
}

function prevSlide() {
  slideIndex -= 2;
  showSlides();
}

function nextSlide() {
  showSlides();
}

setInterval(nextSlide, 5000);
window.onload = showSlides;

let currentIndex = 0;
const carouselItems = document.querySelectorAll('.carousel-item');
const totalItems = carouselItems.length;

function showNextSlide() {
  // Hide current slide
  carouselItems[currentIndex].style.transform = 'translateX(-120%)';

  // Increment index and wrap around if necessary
  currentIndex = (currentIndex + 1) % totalItems;

  // Show next slide
  carouselItems[currentIndex].style.transform = 'translateX(0)';
//   carouselItems[currentIndex].style.visibility = "hidden"

}

// Rotate carousel every 3 seconds
setInterval(showNextSlide, 3000);

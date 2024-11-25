import 'bootstrap/dist/js/bootstrap.bundle.min.js'; // Importa Bootstrap JS

const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})

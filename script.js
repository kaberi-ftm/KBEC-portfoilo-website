// Navbar scroll effect
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// Smooth scroll for navigation links
document.querySelectorAll('.nav-menu a').forEach(link => {
  link.addEventListener('click', (e) => {
    const href = link.getAttribute('href');
    if (href.startsWith('#')) {
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    }
  });
});

// Carousel functionality
const carousel = document.getElementById('carousel');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let carouselIndex = 0;
const carouselItems = document.querySelectorAll('.carousel-item');
const itemsPerView = 4;
const totalItems = carouselItems.length;

function updateCarousel() {
  const scrollDistance = carouselIndex * (100 / itemsPerView);
  carousel.style.transform = `translateX(-${scrollDistance}%)`;
}

prevBtn.addEventListener('click', () => {
  carouselIndex = Math.max(0, carouselIndex - 1);
  updateCarousel();
});

nextBtn.addEventListener('click', () => {
  const maxIndex = Math.max(0, totalItems - itemsPerView);
  carouselIndex = Math.min(maxIndex, carouselIndex + 1);
  updateCarousel();
});

// Responsive carousel items per view
function updateItemsPerView() {
  const width = window.innerWidth;
  if (width < 640) {
    itemsPerView = 1;
  } else if (width < 980) {
    itemsPerView = 2;
  } else {
    itemsPerView = 4;
  }
}

window.addEventListener('resize', () => {
  updateItemsPerView();
  carouselIndex = 0;
  updateCarousel();
});

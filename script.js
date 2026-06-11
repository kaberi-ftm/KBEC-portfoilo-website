// Navbar scroll effect
const navbar = document.getElementById('navbar');
const carousel = document.getElementById('carousel');
const joinModal = document.getElementById('joinModal');

if (!navbar || !carousel || !joinModal) {
    console.warn("Some elements missing in DOM");
} else {
    initApp();
}

function initApp() {
    // all your logic inside here
}

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Smooth scroll
document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', e => {
      const href = link?.getAttribute('href');
if (!href) return;

if (href && href.startsWith('#')) {
            e.preventDefault();

            const target = document.querySelector(href);

            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    });
});

// Carousel

const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let carouselIndex = 0;
let itemsPerView = 4;

const carouselItems = document.querySelectorAll('.carousel-item');
const totalItems = carouselItems.length;

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

function updateCarousel() {
    if (!carouselItems.length || !carousel) return;

    const itemWidth = carouselItems[0].offsetWidth + 32;
    const scrollDistance = carouselIndex * itemWidth;

    carousel.style.transform = `translateX(-${scrollDistance}px)`;
}

updateItemsPerView();

prevBtn?.addEventListener('click', () => {
    carouselIndex = Math.max(0, carouselIndex - 1);
    updateCarousel();
});

nextBtn?.addEventListener('click', () => {
    const maxIndex = Math.max(0, totalItems - itemsPerView);

    carouselIndex = Math.min(maxIndex, carouselIndex + 1);
    updateCarousel();
});

window.addEventListener('resize', () => {
    updateItemsPerView();

    const maxIndex = Math.max(0, totalItems - itemsPerView);
    carouselIndex = Math.min(carouselIndex, maxIndex);

    updateCarousel();
});

// JOIN MODAL
const joinBtn = document.getElementById("joinBtn");
const joinBtnHero = document.getElementById("joinBtnHero");
const closeModal = document.getElementById("closeModal");

joinBtn?.addEventListener("click", () => {
    joinModal.classList.add("active");
});

joinBtnHero?.addEventListener("click", () => {
    joinModal.classList.add("active");
});

closeModal?.addEventListener("click", () => {
    joinModal.classList.remove("active");
});

window.addEventListener("click", e => {
    if (e.target === joinModal) {
        joinModal.classList.remove("active");
    }
});
window.addEventListener('keydown', (e) => {
    if (e.key === "Escape" && joinModal) {
        joinModal.classList.remove("active");
    }
});
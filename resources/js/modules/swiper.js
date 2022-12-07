import { Swiper, Navigation, Pagination } from 'swiper';

const slider = new Swiper('.js-slider', {
    autoplay: {
        delay: 5000,
    },
    loop: true,
    navigation: {
        nextEl: ".js-slider-button-next",
        prevEl: ".js-slider-button-prev",
    },
});

const carousel = new Swiper('.js-carousel', {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: ".js-carousel-button-next",
        prevEl: ".js-carousel-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
        }
    }
});
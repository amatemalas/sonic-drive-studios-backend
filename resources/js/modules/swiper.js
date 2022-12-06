import { Swiper, Navigation, Pagination } from 'swiper';

const swiper = new Swiper('.swiper', {
    autoplay: {
        delay: 5000,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
import {Gallery} from "@/utils/gallery.js";
import {Carousel} from "@/utils/carousel.js";
import Swiper from "swiper";
import {Controller, Navigation} from "swiper/modules";

window.addEventListener('load', e => {

    if (document.querySelector('[data-carousel-decor]') !== null) {
        const carouselDecor = new Carousel('data-carousel-decor');
    }

    if (document.querySelector('[data-carousel-forms]') !== null) {
        const carouselProducts = new Carousel('data-carousel-forms');
    }

    const gallery = new Gallery();

    const swiperOneProduct = document.querySelector("div.swiperProductOne");

    if (swiperOneProduct !== undefined) {
        const swiperProductOneFinally = new Swiper(".swiperProductOne", {
            modules: [Controller, Navigation],
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiperProductOne--next",
                prevEl: ".swiperProductOne--prev",
            }
        })
    }
    const swiperColor = document.querySelector("div.swiperColor");

    if (swiperColor !== undefined) {
        const swiperColorFinally = new Swiper(".swiperColor", {
            modules: [Controller, Navigation],
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiperColor--next",
                prevEl: ".swiperColor--prev",
            }
        })
    }
    const swiperShape = document.querySelector("div.swiperShape");

    if (swiperShape !== undefined) {
        const swiperShapeFinally = new Swiper(".swiperShape", {
            modules: [Controller, Navigation],
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiperShape--next",
                prevEl: ".swiperShape--prev",
            }
        })
    }
})


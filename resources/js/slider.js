import Swiper from 'swiper';
import 'swiper/css';
import {Controller, Navigation, Pagination} from "swiper/modules";

window.addEventListener("load", e => {
    let swiperText = document.querySelector("div.swiperText");
    let swiperImage = document.querySelector("div.swiperImage");

    if (swiperText !== undefined && swiperImage !== undefined) {
        const swiperText = new Swiper(".swiperText", {
            modules: [Controller],
            loop: true,
            slidesPerView: 1,
        })
        const swiperImage = new Swiper(".swiperImage", {
            modules: [Controller, Navigation],
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".slider__control--next",
                prevEl: ".slider__control--previous"
            }
        })


        swiperImage.controller.control = swiperText;
        swiperText.controller.control = swiperImage;
    }
})

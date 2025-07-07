import Swiper from 'swiper';
import 'swiper/css';
import {Controller, Navigation, Pagination} from "swiper/modules";

window.addEventListener("load", e => {
    let slider = document.querySelector("div.swiperImage");

    if (slider !== undefined) {

        const slider = new Swiper(".swiperImage", {
            modules: [Controller, Navigation],
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".slider__control--next",
                prevEl: ".slider__control--previous"
            }
        })
    }
})

import {Gallery} from "@/utils/gallery.js";
import {Carousel} from "@/utils/carousel.js";
import Swiper from "swiper";
import {Controller, Navigation} from "swiper/modules";

function getSliders() {
    return document.querySelectorAll("section[data-slider]");
}

window.addEventListener('load', e => {

    if (document.querySelector('[data-carousel-decor]') !== null) {
        const carouselDecor = new Carousel('data-carousel-decor');
    }

    if (document.querySelector('[data-carousel-forms]') !== null) {
        const carouselProducts = new Carousel('data-carousel-forms');
    }

    const gallery = new Gallery();

    const sliders = getSliders();

    sliders.forEach(slider => {
        let nameSlider = slider.dataset.slider;


        let sliderText = new Swiper(`.${nameSlider}--text`, {
            modules: [Controller, Navigation],
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".slider__control--next",
                prevEl: ".slider__control--previous"
            }
        });
        let sliderImage = new Swiper(`.${nameSlider}--image`, {
            modules: [Controller, Navigation],
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".slider__control--next",
                prevEl: ".slider__control--previous"
            }
        });

        if (slider.querySelector(`.${nameSlider}--text`) !== null && slider.querySelector(`.${nameSlider}--image`) !== null) {
            sliderText.controller.control = sliderImage;
            sliderImage.controller.control = sliderText;
        }
    })
})

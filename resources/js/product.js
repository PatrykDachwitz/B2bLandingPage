import {Gallery} from "@/utils/gallery.js";
import {Carousel} from "@/utils/carousel.js";

window.addEventListener('load', e => {

    if (document.querySelector('[data-carousel-decor]') !== null) {
        const carouselDecor = new Carousel('data-carousel-decor');
    }

    if (document.querySelector('[data-carousel-forms]') !== null) {
        const carouselProducts = new Carousel('data-carousel-forms');
    }

    const gallery = new Gallery();
})


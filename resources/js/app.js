import './bootstrap';
import {compileString} from "sass";
import {checkNeedActivateMenu} from "@/utils/checkNeedActivateMenu.js";
import {Carousel} from "@/utils/carousel.js";

checkNeedActivateMenu();

window.addEventListener('scroll', checkNeedActivateMenu)



window.addEventListener('load', e => {
    const carousel = new Carousel('data-carousel-decor')
})

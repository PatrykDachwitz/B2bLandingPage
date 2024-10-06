import './bootstrap';
import {compileString} from "sass";
import {checkNeedActivateMenu} from "@/utils/checkNeedActivateMenu.js";
import {Carousel} from "@/utils/carousel.js";
import {changeHeightRule} from "@/utils/ruleFormContact.js";
import {Gallery} from "@/utils/gallery.js";
import {Menu} from "@/utils/menu.js";

checkNeedActivateMenu();

window.addEventListener('scroll', checkNeedActivateMenu)



window.addEventListener('load', e => {
    const inputsRule = document.querySelectorAll('[data-rule-span]');

    inputsRule.forEach(input => {
        input.addEventListener('click', (e) => {
            changeHeightRule(input)
        });
    })

    const menu = new Menu();
})


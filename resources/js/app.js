import './bootstrap';
import {compileString} from "sass";

checkNeedActivateMenu();

window.addEventListener('scroll', checkNeedActivateMenu)

function checkNeedActivateMenu() {
    if(window.scrollY > 20) activeScrollMenu();
    else deactivateScrollMenu();
}

function getMenuContainer () {
    return document.querySelector('nav');
}
function activeScrollMenu() {
    let menu = getMenuContainer();

    if (!menu.classList.contains('menu--scroll')) {
        menu.classList.add('menu--scroll');
    }
}

function deactivateScrollMenu() {
    let menu = getMenuContainer();
    if (menu.classList.contains('menu--scroll')) {
        menu.classList.remove('menu--scroll');
    }
}

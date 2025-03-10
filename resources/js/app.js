import './bootstrap';
import {compileString} from "sass";
import {checkNeedActivateMenu} from "@/utils/checkNeedActivateMenu.js";
import {Carousel} from "@/utils/carousel.js";
import {changeHeightRule} from "@/utils/ruleFormContact.js";
import {Gallery} from "@/utils/gallery.js";
import {Menu} from "@/utils/menu.js";
import {ContactForm} from "@/utils/contactForm.js";
import {activateCookie, createCookie} from "@/utils/createCookie.js";
import {showDescription} from "@/utils/showDescription.js";
import {hiddenElement} from "@/utils/hiddenElement.js";
import {acceptAllCookie, updateCookieConsentSettings} from "@/utils/updateCookieConsent.js";
import {setSelectCookiePreference} from "@/utils/setSelectCookiePreference.js";


checkNeedActivateMenu();

window.addEventListener('scroll', checkNeedActivateMenu)



window.addEventListener('load', e => {
    window.showDescription = showDescription;
    window.hiddenElement = hiddenElement;
    setSelectCookiePreference();
    window.updateCookieConsentSettings = updateCookieConsentSettings;
    const inputsRule = document.querySelectorAll('[data-rule-span]');

    inputsRule.forEach(input => {
        input.addEventListener('click', (e) => {
            changeHeightRule(input)
        });
    })

    const menu = new Menu();
    const formContact = new ContactForm('data-form-contact');

    if (document.querySelector('[data-cooke-button]') !== null) {
        activateCookie();
        document.querySelector('[data-cooke-button]').addEventListener('click', () => {
            acceptAllCookie();
            createCookie();
        })
    }
})


import {createCookie} from "@/utils/createCookie.js";

export function updateCookieConsentSettings() {
    const consentCookie = getConsents();
    gtag('consent', 'update', {
        'analytics_storage': consentCookie.marketingCookie,
        'ad_storage': consentCookie.preferenceCookie,
        'ad_user_data': consentCookie.statisticCookie,
        'ad_personalization': consentCookie.preferenceCookie
    });

    setConsentInLocal(consentCookie);
    createCookie();
    hiddenElement('manageCookie');
}

export function acceptAllCookie() {
    const consentCookie = getConsentsAllAccept();
    gtag('consent', 'update', {
        'analytics_storage': consentCookie.marketingCookie,
        'ad_storage': consentCookie.preferenceCookie,
        'ad_user_data': consentCookie.statisticCookie,
        'ad_personalization': consentCookie.preferenceCookie
    });

    setConsentInLocal(consentCookie);
}

function setConsentInLocal(value) {
    localStorage.setItem("user_consent", true);
    localStorage.setItem("userMarketingCookie", value.marketingCookie);
    localStorage.setItem("userPreferenceCookie", value.preferenceCookie);
    localStorage.setItem("userStatisticCookie", value.statisticCookie);
}

function getConsents() {
    const consentCookieClient = {};

    consentCookieClient.preferenceCookie = getConsentByNameInput('preferenceCookie');
    consentCookieClient.statisticCookie = getConsentByNameInput('statisticCookie');
    consentCookieClient.marketingCookie = getConsentByNameInput('marketingCookie');

    return consentCookieClient;
}
function getConsentsAllAccept() {
    const consentCookieClient = {};

    consentCookieClient.preferenceCookie = 'granted';
    consentCookieClient.statisticCookie = 'granted';
    consentCookieClient.marketingCookie = 'granted';

    return consentCookieClient;
}

function getConsentByNameInput(name) {
    if (document.querySelector(`input[name="${name}"]`).checked) {
        return 'granted';
    } else {
        return 'denied';
    }
}

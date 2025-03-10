export function setSelectCookiePreference() {
    const userConsent = getConsentUser();

    if (userConsent.consent === 'true') {
        setCheckedByName('marketingCookie', userConsent.marketingCookie)
        setCheckedByName('preferenceCookie', userConsent.preferenceCookie)
        setCheckedByName('statisticCookie', userConsent.statisticCookie)
    }

}

function setCheckedByName(name, value) {
    if (value === "granted") {
        document.querySelector(`[name="${name}"]`).checked = true;
    }
}

function getConsentUser() {
    const userConsent = {};
    userConsent.consent = localStorage.getItem("user_consent");
    userConsent.marketingCookie = localStorage.getItem("userMarketingCookie");
    userConsent.preferenceCookie = localStorage.getItem("userPreferenceCookie");
    userConsent.statisticCookie = localStorage.getItem("userStatisticCookie");

    return userConsent;
}

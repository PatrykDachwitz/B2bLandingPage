export function setSelectCookiePreference() {
    const userConsent = getConsentUser();

    if (userConsent.consent === 'true') {
        setCheckedByName('marketingCookie', userConsent.marketingCookie)
        setCheckedByName('preferenceCookie', userConsent.preferenceCookie)
        setCheckedByName('statisticCookie', userConsent.statisticCookie)

        updateConsentCookie(userConsent);
    }

}

function updateConsentCookie(consentCookie) {
    gtag('consent', 'update', {
        'analytics_storage': consentCookie.statisticCookie,
        'ad_storage': consentCookie.marketingCookie,
        'ad_user_data': consentCookie.marketingCookie,
        'ad_personalization': consentCookie.marketingCookie,
        'functionality_storage': consentCookie.preferenceCookie,
        'personalization_storage': consentCookie.preferenceCookie,
    });
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

export function createCookie() {
    let date = new Date();
    date.setFullYear(date.getFullYear() + 10); // Ustawienie na 10 lat do przodu
    let expires = "expires=" + date.toUTCString();
    document.cookie = "accepted=accepted;" + expires + ";path=/";
    disabledCookie();
}


export function activateCookie() {
    if (getCookie('accepted') !== "accepted") {
        document.querySelector('section[data-cooke-container]').classList.remove('d-none');
    }
}

function disabledCookie() {
    document.querySelector('section[data-cooke-container]').classList.add('d-none');
}

function getCookie(name) {
    let cookieName = name + "=";

    let decodedCookie = decodeURIComponent(document.cookie);
    let cookiesArray = decodedCookie.split(';');

    for(let i = 0; i < cookiesArray.length; i++) {
        let cookie = cookiesArray[i].trim();
        if (cookie.indexOf(cookieName) === 0) {
            return cookie.substring(cookieName.length, cookie.length);
        }
    }
    return null;
}

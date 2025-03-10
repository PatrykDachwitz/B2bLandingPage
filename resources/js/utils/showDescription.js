export function showDescription(name) {
    const description = getDescription(name);

    if (isActive(description)) {
        console.log('active')
        deactivateDescription(description);
        changePositionArrow(name)
    } else {
        console.log('deactive')
        activeDescription(description);
        changePositionArrow(name)
    }
}

function changePositionArrow(name) {
    const arrow = getArrow(name);

    if (arrow.classList.contains('manageCookie__arrow--down')) {
        arrow.classList.remove('manageCookie__arrow--down');
        arrow.classList.add('manageCookie__arrow--up');
    } else {
        arrow.classList.add('manageCookie__arrow--down');
        arrow.classList.remove('manageCookie__arrow--up');
    }
}
function activeDescription(description) {
    description.classList.remove('d-none');
    description.classList.add('d-flex');
}

function deactivateDescription(description) {
    description.classList.add('d-none');
    description.classList.remove('d-flex');
}

function isActive(description) {
    return description.classList.contains('d-flex');
}

function getDescription(name) {
    return document.querySelector(`[data-description-name="${name}"]`);
}

function getArrow(name) {
    return document.querySelector(`[data-description-arrow="${name}"]`);
}

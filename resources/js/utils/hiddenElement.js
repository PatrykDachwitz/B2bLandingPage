export function hiddenElement(name) {
    const element = getSearchElement(name);

    element.classList.toggle('d-none');
}

function getSearchElement(name) {
    return document.querySelector(`[data-hidden-element-name="${name}"]`)
}

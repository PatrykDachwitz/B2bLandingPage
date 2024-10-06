export function changeHeightRule(input) {
    let nameRule = input.dataset.ruleSpan;
    let containerRule = document.querySelector(`[data-rule-container="${nameRule}"]`);

    if (containerRule.style.maxHeight === 'none') {
        containerRule.style.maxHeight = '38px';
        changeToExpandText(input);
    } else {
        containerRule.style.maxHeight = 'none';
        changeToCollapseText(input);
    }

}

function changeToExpandText(input) {
    input.innerText = input.dataset.expandText;
}

function changeToCollapseText(input) {
    input.innerText = input.dataset.collapseText;
}

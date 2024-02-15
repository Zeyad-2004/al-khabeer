const cards = [...document.querySelectorAll("#trainers .slider .wrapper .cards")];
const radios = [...document.querySelectorAll("#trainers .navigator .radio")];

const cssRoot = getComputedStyle(document.documentElement);

function removeNonNumbers(str) {
    return parseInt(str.replace(/[^0-9]/g, ""));
}

function setTrainers(e) {
    const radioID = parseInt(e.getAttribute("for").slice(-1), 10); // Ensure numerical ID conversion
    const input = cards[0];


    radios.forEach(radio => radio.classList.remove("radio-active"));
    e.classList.add("radio-active");

    const card_gap = removeNonNumbers(cssRoot.getPropertyValue('--card-gap'));
    const card_width = removeNonNumbers(cssRoot.getPropertyValue('--card-width'));
    const slider_cards_num = removeNonNumbers(cssRoot.getPropertyValue('--slider-cards-num'));
    
    let num = (radioID-1) * (card_width * slider_cards_num + card_gap*slider_cards_num);
    num += card_gap/2;
    input.style.marginRight = "-" + num + "px";
}
setTrainers(radios[0]);

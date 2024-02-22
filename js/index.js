const cards = [...document.querySelectorAll("#trainers .slider .wrapper .card")];
let radios = [...document.querySelectorAll("#trainers .navigator .radio")];

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

    let num = (radioID - 1) * (card_width * slider_cards_num + card_gap * slider_cards_num);
    num += card_gap / 2;
    input.style.marginRight = "-" + num + "px";
}
function setTrainersRadios() {
    function setRadios(num) {

        const navigator = document.querySelector("#trainers .navigator");
        navigator.innerHTML = "";

        if (num == 0) {
            navigator.innerHTML = `<div class="scroll-buttons" style="display: flex;margin-bottom: 40px">
                                        <button onclick="scrollButtons(this.id)" class="right" id="r-trainers-cards"><i class="fa-solid fa-chevron-right"></i></button>
                                        <button onclick="scrollButtons(this.id)" class="left" id="l-trainers-cards"><i class="fa-solid fa-chevron-left"></i></button>
                                    </div>
                                    `
        } else {
            for (let i = 1; i <= num; i++) {
                navigator.innerHTML += `<label for="radio${i}" class="radio" onclick="setTrainers(this)">
                                            <input type="radio" name="radio-btn" id="radio${i}">
                                        </label>
                                        `
            }
        }
        radios = [...document.querySelectorAll("#trainers .navigator .radio")];

    }
    if (window.matchMedia("(max-width: 768px)").matches) {
        setRadios(0);
    }
    else if (window.matchMedia("(max-width: 1050px)").matches) {
        setRadios(cards.length / 3 + (cards.length % 3 > 0));
    }
    else if (window.matchMedia("(max-width: 1300px)").matches) {
        setRadios(cards.length / 4 + (cards.length % 4 > 0));
    }
    else if (window.matchMedia("(max-width: 2600px)").matches) {
        setRadios(cards.length / 5 + (cards.length % 5 > 0));
    }

    if (radios.length > 0) {
        setTrainers(radios[0]);
    }

    cards[0].style.marginRight = "-" + 24 + "px";

}


//  Add event listeners to the trainers' radio buttons to inc or dec accordingly to screen size
window.addEventListener('DOMContentLoaded', function () {
    setTrainersRadios();
});
window.addEventListener('resize', function () {
    setTrainersRadios();
});


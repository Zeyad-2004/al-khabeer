// Mkasil aktb Comments dlw2ty elsra7a XD

const videos_dropdown = document.getElementById('vid-card');
const comments_dropdown = document.getElementById('comment');


function handel_list_elements(e, min, className) {
    const elements = e.previousElementSibling.querySelectorAll('.' + className);

    if (elements.length > min) {

        if (e.classList.contains('get')) {
            e.classList.remove('get');
            e.querySelector('h6').innerHTML = 'عرض أقل';
            e.querySelector('svg').style.transform = "rotate(180deg)";
            
            for (let i = min; i < elements.length; i++) {
                elements[i].style.display = 'block';
            }
        }
        else {
            e.classList.add('get');
            e.querySelector('h6').innerHTML = 'عرض المزيد';
            e.querySelector('svg').style.transform = "rotate(0deg)";

            for (let i = min; i < elements.length; i++) {
                elements[i].style.display = 'none';
            }
        }
    }
    else {
        e.style.display = 'none';
    }
}

window.addEventListener('load', () => {
    if(window.innerWidth > 768){
        handel_list_elements(videos_dropdown, 8, 'vid-card');
        handel_list_elements(comments_dropdown, 3, 'comment');
    }
});
window.addEventListener('resize', () => {
    console.log(window.innerWidth);
    if(window.innerWidth > 768){
        handel_list_elements(videos_dropdown, 8, 'vid-card');
        handel_list_elements(comments_dropdown, 3, 'comment');
    }
});



const questions_dropdown = [...document.querySelectorAll(".title svg")];

questions_dropdown.forEach(dropdown => {
    dropdown.addEventListener("click", (e) => {
        const answer = dropdown.parentNode.nextElementSibling;

        if (answer.classList.contains("hidden")) {
            answer.classList.remove("hidden");
            answer.classList.add("visible");

            dropdown.style.transform = "rotate(180deg)";
        }
        else {
            answer.classList.remove("visible");
            answer.classList.add("hidden");

            dropdown.style.transform = "rotate(0deg)";
        }
    })
});
const popup_navbar = document.getElementById('popup-navbar');
const navbar = document.getElementById('side-navbar');
const overlay = document.getElementById('overlay');

function openPopup(){
    overlay.style.visibility = 'visible';
    document.body.style.overflow = "hidden";
    navbar.style.transform = 'translate(-50%, -10vh)';
}
function closePopup(){
    overlay.style.visibility = 'hidden';
    document.body.style.overflow = "scroll";
    navbar.style.transform = 'translate(-50%, 75vh)';
}


window.addEventListener('scroll', function(){
    if(this.innerHeight + this.scrollY >= 500 && this.innerHeight + this.scrollY <= document.body.scrollHeight - 600){
        popup_navbar.style.visibility = 'visible';
    }
    else{
        popup_navbar.style.visibility = 'hidden';
    }
})
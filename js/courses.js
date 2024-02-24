const popup_navbar = document.getElementById('popup-navbar');
const navbar = document.getElementById('side-navbar');
const overlay = document.getElementById('overlay');
let courses = [...document.querySelectorAll('.course-container')];

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

function setCoursesLimits(){
    if(courses.length > 5){

        if(courses[5].style.display == "none"){
            courses.forEach(element => {
                element.style.setProperty('display', 'flex', 'important');
            });

            document.querySelector('#courses-control .button').innerHTML = '<h1>اعرض اقل</h1>';
        }
        else{
            courses.forEach(element => {
                element.style.setProperty('display', 'none', 'important');
            });
            
            for (let i = 0; i < 5; i++) {
                courses[i].style.setProperty('display', 'flex', 'important');
            }
            
            document.querySelector('#courses-control .button').innerHTML = '<h1>اكتشف المزيد</h1>';
        }    
    }
    else{
        document.getElementById('courses-control').style.setProperty('display', 'none', 'important');
    }

    courses = [...document.querySelectorAll('.course-container')];
}

setCoursesLimits();





window.addEventListener('scroll', function(){
    console.log(this.innerHeight + this.scrollY);
    console.log(document.body.scrollHeight - 600);
    if(this.innerHeight + this.scrollY >= 600 && this.innerHeight + this.scrollY <= document.body.scrollHeight - 600){
        popup_navbar.style.visibility = 'visible';
    }
    else{
        popup_navbar.style.visibility = 'hidden';
    }
})
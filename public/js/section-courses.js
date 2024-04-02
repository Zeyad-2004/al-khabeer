const popup_navbar = document.getElementById('popup-navbar');
const navbar = document.getElementById('side-navbar');
const overlay = document.getElementById('overlay');

function openPopup(){
    overlay.style.visibility = 'visible';
    document.body.style.overflow = "hidden";
    navbar.style.transform = 'translate(-50%, 0)';
}
function closePopup(){
    overlay.style.visibility = 'hidden';
    document.body.style.overflow = "scroll";
    navbar.style.transform = 'translate(-50%, 100%)';
}


// ######################################################################
// ################### Go to Selected Courses Section ###################

// Function to extract numbers from string
function removeNonNumbers(str) {
    return parseInt(str.replace(/[^0-9]/g, ""));
}

// Get all sections Navbar links
const links = [...document.querySelectorAll('#nav-content a')];

// Add Event when click on any of those links
links.forEach(link => {
  link.addEventListener('click', function(event) {
    //  Prevent default behavior of a element to go to href
    event.preventDefault();

    let section_id;
    let hyphens_split = this.id.split('-');

    // Hyphens_split should be with certain style 
    // hyphens_split[0] should be -> ("section")
    // hyphens_split[1] should be -> ("id")
    // hyphens_split[2] should be after get number only form if -> (1... inf.)
    if(hyphens_split.length === 3){
        if(hyphens_split[0] === "section" && hyphens_split[1] === "id"){
            
            section_id = removeNonNumbers(hyphens_split[2]);
            if(section_id > 0){
                window.location.href = "/section-courses/" + section_id + "/" + 1;
            }
        }
    }
  });
});


// ########## Set Active Section Style ###########
let page_section_id = document.getElementById("nav-content").dataset.activeId;

links.forEach(link => {
    if(link.id === "section-id-" + page_section_id){
        link.classList.add("active");
    }
    else{
        link.classList.remove("active");
    }
});


// ###########################################################################
// ########### Control visibility of Mobile sections navbar Popup ############
window.addEventListener('scroll', function(){
    if(this.innerHeight + this.scrollY >= 500 && this.innerHeight + this.scrollY <= document.body.scrollHeight - 600){
        popup_navbar.style.visibility = 'visible';
    }
    else{
        popup_navbar.style.visibility = 'hidden';
    }
})
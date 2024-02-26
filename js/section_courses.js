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
                // After all condition make a form to go to the other page with section_id and page with ( __GET__ METHOD)
                const form = document.createElement("form");
                form.method = "GET";
                form.action = "section_courses";

                // Input have section data
                const section = document.createElement("input");
                section.type = "text";
                section.name = "section";
                section.value = section_id;
                
                // Input have page data
                const page = document.createElement("input");
                page.type = "text";
                page.name = "page";
                page.value = 1;

                // Append inputs to the form 
                form.appendChild(section);
                form.appendChild(page);

                // Add form to body and submit it then delete if
                document.body.appendChild(form);
                form.submit();
                document.body.removeChild(form);
            }
        }
    }
  });
});


// ########## Set Active Section Style ###########
let page_section_id=0;
let location_search = window.location.search;

for (let i = window.location.search.lastIndexOf('section=') + 8; i < location_search.length && /\d/.test(location_search[i]); i++) {
    page_section_id *= 10;
    page_section_id += location_search[i]-'0';
}

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
// Mobile vision Scroll buttons for Course-preview-card
function scrollButtons(e, scroll_value = 333) {
  const container_id = document.getElementById(e.slice(2));

  if (e[0] == "l") {
    container_id.style.scrollBehavior = "smooth";
    container_id.scrollLeft -= scroll_value;
  } else if (e[0] == "r") {
    container_id.style.scrollBehavior = "smooth";
    container_id.scrollLeft += scroll_value;
  }
}

// Mobile Signin/up pop up

let mobileSigninPopup = document.getElementById("mobile-login-popup");
let mobileSignupPopup = document.getElementById("mobile-signup-popup");
let mobileProfile = document.getElementById("mobile-profile-link");
let mobilePopup = document.getElementById("mobile-popup");

const switchPopup = (e) => {
  if (e.id == "dont-have-account") {
    mobileSigninPopup.style.display = "none";
    mobileSignupPopup.style.display = "block";
  } else {
    mobileSignupPopup.style.display = "none";
    mobileSigninPopup.style.display = "block";
  }
};

mobileProfile.addEventListener("click", () => {
  mobilePopup.classList.toggle("active");
});

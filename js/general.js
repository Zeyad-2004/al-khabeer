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
let mobilePopup = document.getElementById("mobile-popup");

let isPopupOpen = false;

const switchPopup = (e) => {
  if (e.id == "dont-have-account") {
    mobileSigninPopup.style.display = "none";
    mobileSignupPopup.style.display = "block";
  } else {
    mobileSignupPopup.style.display = "none";
    mobileSigninPopup.style.display = "block";
  }
};

const openClosePopup = () => {
  mobilePopup.classList.toggle("active");
  isPopupOpen = mobilePopup.classList.contains("active");

  document.body.style.overflow = isPopupOpen ? "hidden" : "auto";
}

mobilePopup.addEventListener("click", (event) => {
  if (
    !mobileSigninPopup.contains(event.target) &&
    !mobileSignupPopup.contains(event.target) &&
    isPopupOpen
  ) {
    mobilePopup.classList.remove("active");
    isPopupOpen = false;
    document.body.style.overflow = "auto";
  }
});

document.body.addEventListener("touchmove", (event) => {
  if (isPopupOpen) {
    event.preventDefault();
  }
});

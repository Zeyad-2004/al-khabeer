const showBtnArray = [...document.getElementsByClassName("show-pass")];

showBtnArray.forEach((btn) => {
  btn.addEventListener("click", function () {
    if (btn.classList.contains("fa-eye")) {
      btn.classList.remove("fa-eye");
      btn.classList.add("fa-eye-slash");
      document.getElementById(btn.id + "-password").type = "text";
    } else if (btn.classList.contains("fa-eye-slash")) {
      btn.classList.remove("fa-eye-slash");
      btn.classList.add("fa-eye");
      document.getElementById(btn.id + "-password").type = "password";
    }
  });
});

window.onload = function () {
  console.log("the page has been loaded again!");
};

var translateBtn = document.getElementById("tran");
var rightSec = document.querySelector(".checkout-container .right-section");
var leftSec = document.querySelector(".checkout-container .left-section");

translateBtn.addEventListener("click", function () {
  if (window.innerWidth <= 768) {
    translateBtn.type = "button";
    rightSec.style.transform = "translateX(0)";
    leftSec.style.transform = "translateX(-100%)";
    var translateBack = document.getElementById("back");

    translateBack.addEventListener("click", function () {
      leftSec.style.transform = "translateX(0)";
      rightSec.style.transform = "translateX(-100%)";
    });
  }
});

function changeRadioActive(id) {
  let radio1 = document.getElementById("option-1");
  let radio2 = document.getElementById("option-2");
  let radio3 = document.getElementById("option-3");

  radio3.checked = false;
  radio2.checked = false;
  radio1.checked = false;

  if (id == 1) {
    radio1.value = "";
    radio1.checked = true;
  } else if (id == 2) {
    radio2.value = "";
    radio2.checked = true;
  } else if (id == 3) {
    radio3.value = "";
    radio3.checked = true;
  }
}

function showBankNum() {
  var banknum = document.getElementById("bank-num");
  var bankList = document.querySelector(
    ".checkout-container .left-section .forms .bank-form .bank select"
  );
  bankList.style.marginBottom = "0%";
  banknum.style.display = "block";
}

function cardNumber(text) {
  if (
    text.value.length > 0 &&
    !(
      text.value[text.value.length - 1] >= "0" &&
      text.value[text.value.length - 1] <= "9"
    )
  ) {
    text.value = text.value.slice(0, -1);
  } else {
    if (
      text.value.length &&
      (text.value.length - Math.floor(text.value.length / 5)) % 4 == 0
    ) {
      text.value = text.value + " ";
    }
  }

  if (text.value.length > 19) {
    text.value = text.value.slice(0, 19);
  }
}

function cardExpirationDate(text) {
  if (
    text.value.length > 0 &&
    !(
      text.value[text.value.length - 1] >= "0" &&
      text.value[text.value.length - 1] <= "9"
    )
  ) {
    text.value = text.value.slice(0, -1);
  } else {
    if (text.value.length && text.value.length == 2) {
      text.value = text.value + "/";
    }
  }

  if (text.value.length > 5) {
    text.value = text.value.slice(0, 5);
  }
}

function cardCVV(text) {
  if (
    text.value.length > 0 &&
    !(
      text.value[text.value.length - 1] >= "0" &&
      text.value[text.value.length - 1] <= "9"
    )
  ) {
    text.value = text.value.slice(0, -1);
  }

  if (text.value.length > 3) {
    text.value = text.value.slice(0, 3);
  }
}

function change_radio_active(id) {
    let radio1 = document.getElementById('option-1');
    let radio2 = document.getElementById('option-2');
    let radio3 = document.getElementById('option-3');


    radio3.checked = false;
    radio2.checked = false;
    radio1.checked = false;

    if (id == 1) {
        radio1.value = "";
        radio1.checked = true;
    }
    else if (id == 2) {
        radio2.value = "";
        radio2.checked = true;
    }
    else if (id == 3) {
        radio3.value = "";
        radio3.checked = true;
    }
}

flatpickr('.flatpickr', {
    dateFormat: "mm/yy",
  });


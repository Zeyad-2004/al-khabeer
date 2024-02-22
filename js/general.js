// Mobile vision Scroll buttons for Course-preview-card
function scrollButtons(e, scroll_value = 333) {
    const container_id = document.getElementById(e.slice(2));

    if (e[0] == 'l') {
        container_id.style.scrollBehavior = "smooth";
        container_id.scrollLeft -= scroll_value;
    }
    else if (e[0] == 'r') {
        container_id.style.scrollBehavior = "smooth";
        container_id.scrollLeft += scroll_value;
    }
}
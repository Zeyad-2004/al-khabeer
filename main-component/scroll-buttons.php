<?php
function getScrollButtons($section_scroll_id_name, $section_scroll_value=333) {
    
    echo'    <div class="scroll-buttons">
                <button onclick="scrollButtons(this.id, '. $section_scroll_value. ')" class="right" id="r-'. $section_scroll_id_name .'"><i class="fa-solid fa-chevron-right"></i></button>
                <button onclick="scrollButtons(this.id, '. $section_scroll_value. ')" class="left" id="l-'. $section_scroll_id_name .'"><i class="fa-solid fa-chevron-left"></i></button>
            </div>';
}
?>
// Import Page CSS file
function setPageCssFile() {
    // Get url and get the file name from it
    const pathname = window.location.pathname;
    const segments = pathname.split("/");

    // Get file name without extension or any thing front of it
    let page_name = segments[segments.length - 1];
    page_name = page_name.split('.')[0];

    // Set link atribute in html to get the style of this file
    const cssLinkAtribute = document.getElementById("pageCssFile");
    cssLinkAtribute.href = "style/" + (((page_name.length > 0) ? page_name : "index")) + ".css";
    console.log(page_name);
}


setPageCssFile();

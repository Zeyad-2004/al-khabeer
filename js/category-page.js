let moreBtn = document.querySelector(".category-content .more");
let moreicon = document.querySelector(".category-content .more svg");
let moretitle = document.querySelector(".category-content .more h6");
let moreCommentBtn = document.querySelector(".more-comments-btn");

let moreCommenticon = document.querySelector(".more-comments-btn svg");
let moreCommenttitle = document.querySelector(".more-comments-btn h6");
let moreComment = document.querySelector(" .more-comments");

let moreVideos =document.querySelector(".course-container .video-container-more");


moreBtn.onclick = ()=>{
    if(moreVideos.style.display ==="grid"){
        moreVideos.style.display ="none"
        moretitle.innerText = "  مشاهدة المزيد"
        moreicon.style.transform = "rotate(180deg)";
    }else{
        moreVideos.style.display ="grid";
        moretitle.innerText = "عناصر اقل";
        moreVideos.style.marginBottom = "20px";
        moreicon.style.transform = "rotate(180deg)";


    }
}

moreCommentBtn.onclick = ()=>{
    if(moreComment.style.display ==="flex"){
        moreComment.style.display ="none"
        moreCommenttitle.innerHTML = "تعليقات اقل"
        moreCommenticon.style.transform = "rotate(180deg)";

    }else{
        moreComment.style.display ="flex"
        moreCommenttitle.innerHTML = " المزيد من التعليقات"
        moreComment.style.marginBottom = "20px"
        moreCommenticon.style.transform = "rotate(180deg)";



    }
}



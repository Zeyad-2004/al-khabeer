let moreBtn = document.querySelector("#more");
let moreSection = document.querySelector(".more-section")
let menu = document.querySelector(".menu-icon")
let sideNav = document.querySelector(".sid-navbar")

moreBtn.onclick = ()=>{
    if(moreSection.style.display === 'none'){
moreSection.style.display = 'block';
moreBtn.innerHTML ="عرض اقل";

}else {
    moreSection.style.display = 'none';
moreBtn.innerHTML ="اكتشف المزيد";
}



}

menu.onclick = ()=>{
    if(sideNav.style.display ==='none'){
        sideNav.style.display ='block' 
    }else{
        sideNav.style.display ='none'
    }
}
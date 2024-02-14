<?php include "main-component/discountbar.php" ?>

<nav id="main-navbar" class="navbar navbar-expand-lg">

    <a href="#" class="logo-image logo">
    </a>
    <div class="navbar-content">
        <div class="part">
            <a href="index.php" class="navbar-active">الرئيسية</a>
        </div>
        <div class="part">
            <a href="#">الدورات</a>
        </div>
        <div class="part">
            <a href="#">المدونة</a>
        </div>
        <div class="part">
            <a href="#">حول</a>
        </div>
        <div class="part">
            <a href="#main-footer">اتصل بنا</a>
        </div>
    </div>
    <div class="search">
        <form action="" class="flex">
            <input type="text" name="navbar_search" class="navbar-searchbar" placeholder="البحئ عن دورة">

            <button type="submit" class="navbar-search-submit-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </button>
        </form>
    </div>
    <div class="user">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
            </svg>
        </a>
        <div class="profile flex">
            <a href="#">
                <div class="user-image">

                </div>
            </a>
            <div class="name">
                <a href="#">مرحبا بك زياد</a>
                <a href="#">تسجيل الخروج</a>
            </div>
        </div>
    </div>
</nav>
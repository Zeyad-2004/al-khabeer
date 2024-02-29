<?php include "main-component/discountbar.php" ?>

<nav id="main-navbar">

    <a href="index.php" class="logo-image logo">
    </a>
    <div class="navbar-content">
        <div class="part">
            <a href="index.php" class=" <?php if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) === "index") echo 'navbar-active'; ?>">الرئيسية</a>
        </div>
        <div class="part navbar-active">
            <a href="courses.php" class=" <?php if (in_array(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME), ["courses", "section_courses"])) echo 'navbar-active'; ?>">الدورات</a>
        </div>
        <div class="part">
            <a href="#">المدونة</a>
        </div>
        <div class="part">
            <a href="about-us.php" class=" <?php if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) === "about-us") echo 'navbar-active'; ?>">حول</a>
        </div>
        <div class="part">
            <a href="contact-us.php" class=" <?php if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) === "contact-us") echo 'navbar-active'; ?>">اتصل بنا</a>
        </div>
    </div>
    <div class="search">
        <form action="" class="flex">
            <input type="text" name="navbar_search" class="navbar-searchbar form-control" placeholder="البحئ عن دورة">

            <button type="submit" class="navbar-search-submit-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </button>
        </form>
    </div>
    <?php if (false) : ?>
        <div class="user">
            <a href="#" style="transition: 0.3s;">
                <svg class="cart" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                </svg>
            </a>
            <div class="profile flex">
                <a href="profile.php">
                    <div class="user-image">

                    </div>
                </a>
                <div class="name">
                    <a href="profile.php">مرحبا بك زياد</a>
                    <a href="#">تسجيل الخروج</a>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="login-register">
            <a href="login.php">تسجيل الدخول / تسجيل جديد</a>
        </div>
    <?php endif; ?>
</nav>
<nav id="mobile-main-navbar">
    <div class="container">
        <div class="icon <?php if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) === "index") echo 'mobile-navbar-active-icon'; ?>">
            <a href="index.php">

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M11.6505 4.16797L4.68842 9.59297C3.52592 10.4971 2.58301 12.4217 2.58301 13.8813V23.4526C2.58301 26.4492 5.02426 28.9034 8.02092 28.9034H22.9784C25.9751 28.9034 28.4163 26.4492 28.4163 23.4655V14.0621C28.4163 12.4992 27.3701 10.4971 26.0913 9.60589L18.1088 4.01297C16.3005 2.74714 13.3943 2.81172 11.6505 4.16797Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.5 23.7373V19.8623V23.7373Z" fill="white" />
                    <path d="M15.5 23.7373V19.8623" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1>الرئيسية</h1>
            </a>
        </div>
        <div class="icon <?php if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) === "profile") echo 'mobile-navbar-active-icon'; ?>">
            <a 
                <?php if(false): ?>
                    href="profile.php" 
                
                <?php else: ?>
                    onclick="openClosePopup()"
                
                <?php endif; ?>
            >
            
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M16.1603 17.04C16.067 17.0266 15.947 17.0266 15.8403 17.04C13.4936 16.96 11.627 15.04 11.627 12.68C11.627 10.2666 13.5736 8.30664 16.0003 8.30664C18.4136 8.30664 20.3736 10.2666 20.3736 12.68C20.3603 15.04 18.507 16.96 16.1603 17.04Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M24.987 25.8401C22.6137 28.0134 19.467 29.3334 16.0003 29.3334C12.5337 29.3334 9.38701 28.0134 7.01367 25.8401C7.14701 24.5867 7.94701 23.3601 9.37367 22.4001C13.027 19.9734 19.0003 19.9734 22.627 22.4001C24.0537 23.3601 24.8537 24.5867 24.987 25.8401Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16.0003 29.3337C23.3641 29.3337 29.3337 23.3641 29.3337 16.0003C29.3337 8.63653 23.3641 2.66699 16.0003 2.66699C8.63653 2.66699 2.66699 8.63653 2.66699 16.0003C2.66699 23.3641 8.63653 29.3337 16.0003 29.3337Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1>الملف الشخصي</h1>
            </a>
        </div>
        <div class="icon">
            <a href="#">

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M11.3799 3.08301L6.7041 7.77176" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M19.6201 3.08301L24.2959 7.77176" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.58301 10.64C2.58301 8.25039 3.86176 8.05664 5.45051 8.05664H25.5488C27.1376 8.05664 28.4163 8.25039 28.4163 10.64C28.4163 13.4171 27.1376 13.2233 25.5488 13.2233H5.45051C3.86176 13.2233 2.58301 13.4171 2.58301 10.64Z" stroke="white" stroke-width="1.5" />
                    <path d="M12.6064 18.583V23.1684" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M18.5479 18.583V23.1684" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M4.52051 13.417L6.34176 24.577C6.75509 27.0828 7.74967 28.917 11.4438 28.917H19.2326C23.2497 28.917 23.8438 27.1603 24.3088 24.732L26.4788 13.417" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <h1>السلة</h1>
            </a>
        </div>
        <div class="icon <?php if (in_array(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME), ["courses", "section_courses"])) echo 'mobile-navbar-active-icon'; ?>">
            <a href="courses.php">

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M28.4167 11.5047V5.64051C28.4167 3.81926 27.59 3.08301 25.5363 3.08301H20.3179C18.2642 3.08301 17.4375 3.81926 17.4375 5.64051V11.4918C17.4375 13.3259 18.2642 14.0493 20.3179 14.0493H25.5363C27.59 14.0622 28.4167 13.3259 28.4167 11.5047Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M28.4167 26.0363V20.8179C28.4167 18.7642 27.59 17.9375 25.5363 17.9375H20.3179C18.2642 17.9375 17.4375 18.7642 17.4375 20.8179V26.0363C17.4375 28.09 18.2642 28.9167 20.3179 28.9167H25.5363C27.59 28.9167 28.4167 28.09 28.4167 26.0363Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.5622 11.5047V5.64051C13.5622 3.81926 12.7355 3.08301 10.6818 3.08301H5.46342C3.40967 3.08301 2.58301 3.81926 2.58301 5.64051V11.4918C2.58301 13.3259 3.40967 14.0493 5.46342 14.0493H10.6818C12.7355 14.0622 13.5622 13.3259 13.5622 11.5047Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.5622 26.0363V20.8179C13.5622 18.7642 12.7355 17.9375 10.6818 17.9375H5.46342C3.40967 17.9375 2.58301 18.7642 2.58301 20.8179V26.0363C2.58301 28.09 3.40967 28.9167 5.46342 28.9167H10.6818C12.7355 28.9167 13.5622 28.09 13.5622 26.0363Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1>الدورات</h1>
            </a>
        </div>
    </div>
</nav>

<?php if(true):?>

    <!-- Mobile Signin/up Popup -->
    <div class="mobile-login-container d-flex justify-content-center mobile-popup" id="mobile-popup">
        <div class="content-wrapper" id="mobile-login-popup">
            <h1>مرحبا</h1>
            <h3>برجاء تسجيل الدخول للمتابعة</h3>
            <form action="" class="d-flex flex-column">
                <div class="d-flex flex-column inputs-container">
                    <input type="text" name="mobile-login" id="mobile-login" placeholder="اسم المستخدم">
                    <input type="password" name="mobile-password" id="mobile-password" placeholder="كلمة المرور">
                </div>
                <button type="submit">تسجيل الدخول</button>
            </form>
            <a class="dont-have-account" id="dont-have-account" onclick="switchPopup(this)">ليس لديك حساب ؟ انشاء
                حساب الان</a>
        </div>
        <div class="content-wrapper" id="mobile-signup-popup">
            <h1>تسجيل حساب جديد</h1>
            <div class="sign-up-socials d-flex flex-column gap-2 my-3">
                <h3>وسائل تواصل اجتماعي</h3>
                <div class="d-flex gap-3">
                    <button>تويتر</button>
                    <button>انستغرام</button>
                </div>
            </div>
            <div class="mobile-sign-up-form">
                <h5>او اميل الالكتروني</h5>
                <form action="">
                    <div>
                        <input type="text" name="mobile-signup-name" id="mobile-signup-name" placeholder="الاسم">
                        <input type="email" name="mobile-signup-email" id="mobile-signup-email" placeholder="الايميل">
                        <input type="password" name="mobile-signup-password" id="mobile-signup-password" placeholder="كلمة المرور">
                        <input type="text" name="mobile-signup-phone" id="mobile-signup-phone" placeholder="رقم الهاتف">
                    </div>
                    <button type="submit">تسجيل الدخول</button>
                </form>
                <a class="have-account" id="have-account" onclick="switchPopup(this)">لديك حساب بالفعل؟ تسجيل
                    جديد</a>
            </div>
        </div>
    </div>

<?php endif; ?>
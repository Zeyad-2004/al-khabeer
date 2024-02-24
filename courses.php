<?php require_once "main-component/header.php" ?>
<?php require_once "main-component/navbar.php" ?>
<?php include "main-component/scroll-buttons.php" ?>

<section id="all-courses-preview" class="d-flex">
    <section id="side-navbar" class="d-flex flex-column align-items-start">

        <div class="block d-flex justify-content-between" style="width: 100%; position: relative;">
            <h1 class="nav-title" href="#">التصنيفات</h1>
            <div class="close-popup" style="position: absolute; left: 0; top:0; transform: translate(-20px, -30px); cursor: pointer; display: none;"  onclick="closePopup()">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </div>
        </div>
        <div class="line"></div>

        <div class="nav-content">

            <a href="#">الرسم الهندسي</a>
            <a href="#">الفن و الكتابة</a>
            <a href="#">امن المعلومات</a>
            <a href="#">تصميمات</a>
            <a href="#">هاتف</a>
            <a href="#">تسويق</a>
            <a href="#">اعلانات</a>
            <a href="#">رسوم</a>
            <a href="#">نحت</a>
            <a href="#">تصوير</a>
            <a href="#">تصميم</a>
            <a href="#">رسوم متحركة</a>
            <a href="#">كتبة</a>
            <a href="#">موضة</a>
            <a href="#">صفحات ويب</a>
            <a href="#">موسيقى</a>

        </div>

    </section>

    <section id="courses" class="d-flex flex-column gap-5 align-items-start">

        <div class="header">
            <img src="media/main/img1.png" alt="">
        </div>

        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-1" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-1", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-2" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-2", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-3" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-3", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-4" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-4", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-5" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-5", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-6" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-6", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-7" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-7", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-8" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-8", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-9" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-9", 333); ?>
        </div>
        <div class="course-container d-flex gap-5 flex-column">

            <div class="course">
                <div class="course-details">
                    
                    <div class="description">
                        <h3 class="title">الرسم الهندسي</h3>
                        <p class="prent">إذا كنت تبحث عن الدورات التدريبية الرائعة والمميزة التي تساعدك على تحسين مهاراتكوالنمو في مجال عملك أو هوايتك المفضلة، فأنت في المكان المناسب!</p>
                    </div>
                    
                </div>
                
                <div class="more d-flex justify-content-end">
                    <a href="#">
                        <h3 class="title"> اكتشف المزيد
                            <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black" />
                            </svg>
                        </h3>
                    </a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div id="card-id-10" class="card-container d-flex gap-5 flex-wrap">
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
                <?php include("main-component/product-card.php") ?>
            </div>

            <?php getScrollButtons("card-id-10", 333); ?>
        </div>

        <div id="courses-control" class="d-flex align-items-center justify-content-center" onclick="setCoursesLimits()">
            <div class="button d-flex flex-column justify-content-center align-items-center">
                <h1>اكتشف المزيد</h1>
            </div>
        </div>
    </section>
</section>

<div id="popup-navbar" onclick="openPopup()">
    <div class="button">
        <h3> المزيد من التصنيفات
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
            </svg>
        </h3>
    </div>
</div>

<div id="overlay" onclick="closePopup()"></div>

<?php require_once "main-component/footer.php" ?>
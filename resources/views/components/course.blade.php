
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
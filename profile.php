<?php require_once "main-component/header.php" ?>
<?php require_once "main-component/navbar.php" ?>


<section id="profile">
    <div class="top-section mobile-view">
        <div class="content">
            <div class="logout">
                <a href="#">تسجيل الخروج</a>
            </div>
            <h1>حسابي</h1>
        </div>
    </div>

    <div class="line mobile-view"></div>
    
    <section id="fixed-section">

        <div class="user d-flex gap-3">
            <div class="image"></div>
            <div class="content">
                <h1 class="desktop-view">مرحبا</h1>
                <h3>محمد طارق احمد</h3>
            </div>
        </div>
        
        <div class="info mobile-view">
            <h1>معلومات الحساب</h1>
        </div>
        
        <div class="sections">

            <div class="partition active">
                <p>تفاصيل الحساب</p>
            </div>
            
            <div class="line desktop-view"></div>
            
            <div class="partition">
                <p>دوراتي</p>
            </div>
            
            <div class="line desktop-view"></div>
            
            <div class="partition">
                <p>شهاداتي</p>
            </div>
            
            <div class="line desktop-view"></div>
        </div>
        <div class="logout desktop-view">
            <a href="#">تسجيل الخروج</a>
        </div>
    </section>

    <div class="line mobile-view"></div>
    
    <!-- ##################################################################################### -->
    <!-- you have one class [mobile-view -> to make this element display form 768px to below]  -->
    <!-- you have one class [desktop-view -> to make this element display from 768px to above] -->
    <!-- !! Delete after start work !! -->
    <section id="content-section" class="border">
        <p>عيش يا باشااااااااااا</p>
    </section>
</section>

<?php require_once "main-component/footer.php" ?>
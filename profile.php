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

            <div class="partition <?php if (!isset($_GET['page']) || !in_array($_GET['page'], array(2, 3))) echo "active"; ?>">
                <a href="profile.php">
                    <h1>تفاصيل الحساب</h1>
                </a>
            </div>

            <div class="line desktop-view"></div>

            <div class="partition <?php if (isset($_GET['page']) && $_GET['page'] == 2) echo "active"; ?>">
                <a href="profile.php?page=2">
                    <h1>دوراتي</h1>
                </a>
            </div>

            <div class="line desktop-view"></div>

            <div class="partition <?php if (isset($_GET['page']) && $_GET['page'] == 3) echo "active"; ?>">
                <a href="profile.php?page=3">
                    <h1>شهاداتي</h1>
                </a>
            </div>

            <div class="line desktop-view"></div>
        </div>
        <div class="logout desktop-view">
            <a href="#">تسجيل الخروج</a>
        </div>
    </section>

    <div class="line mobile-view"></div>

    <!-- ##################################################################################### -->
    <!-- you have a general class [mobile-view -> to make this element display from 768px to below]  -->
    <!-- you have a general class [desktop-view -> to make this element display from 768px to above] -->
    <!-- !! Delete comments after start work !! -->
    <section id="section-content">
        <!-- go down and start work at section-content-thePartOfPage[2,3] -->
        <!-- else in css the start in ready  -->
        <!-- !! Delete comments after start work !! -->

        <?php if (!isset($_GET['page']) || !in_array($_GET['page'], array(2, 3))) : ?>

            <section class="section-content-1">
                <h1 class="section-name text-center desktop-view">حسابي</h1>
                <form action="" method="POST">

                    <div class="first">
                        <div class="name">
                            <div class="inputs row gy-lg-4 gap-3">

                                <div class="col-12">
                                    <label for="name" class="form-label">الاسم</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="viewed-name" class="form-label">الاسم الظاهر</label>
                                    <input type="text" name="name" id="viewed-name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="photo-upload">
                            <input type="file" name="photo" accept="image/*" id=photo>
                            <label for="photo">
                                <div class="top">
                                    <h1>لتغير الصورة برجاء قم بتحميلها هنا </h1>
                                    <h6>Max Size: 50mb</h6>
                                </div>
                                <div class="down">
                                    <div class="image">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                            <path d="M23.1875 39.75V12.7531L14.575 21.3656L9.9375 16.5625L26.5 0L43.0625 16.5625L38.425 21.3656L29.8125 12.7531V39.75H23.1875ZM6.625 53C4.80313 53 3.24294 52.3507 1.94444 51.0522C0.645943 49.7537 -0.00220271 48.1947 5.62394e-06 46.375V36.4375H6.625V46.375H46.375V36.4375H53V46.375C53 48.1969 52.3507 49.7571 51.0522 51.0556C49.7537 52.3541 48.1947 53.0022 46.375 53H6.625Z" fill="#BDBDBD" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="second">
                        <div class="row gx-5 gy-4">
                            <div class="col-lg-6">
                                <label for="phone" class="form-label">رقم الهاتف</label>
                                <input type="text" name="phone_number" id="phone" class="form-control">
                            </div>

                            <div class="col-lg-6">
                                <label for="phone" class="form-label">الدولة</label>
                                <input type="text" name="phone_number" id="phone" class="form-control">
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">الايمال</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="third row gy-4">
                        <h1>كلمة المرور</h1>
                        <div class="col-12">
                            <label for="current-pass" class="form-label"> كلمة المرور الحالية</label>
                            <input type="password" name="current_pass" id="current-pass" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="new-pass" class="form-label"> كلمة المرور الجديدة</label>
                            <input type="password" name="new_pass" id="new-pass" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="new-pass-confirm" class="form-label"> تاكيد كلمة المرور</label>
                            <input type="password" name="new_pass_confirm" id="new-pass-confirm" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12 submit-form">
                        <button type="submit" class="btn">
                            <h1>حفظ التغيرات</h1>
                        </button>
                    </div>
                </form>
            </section>
        <?php elseif ($_GET['page'] == 2) : ?>

            <section class="section-content-2 border">
                عيش يا باشااااااااااا
            </section>
        <?php else : ?>

            <section class="section-content-3 border">
                عيش يا باشااااااااااا
            </section>

        <?php endif; ?>

    </section>
</section>

<?php require_once "main-component/footer.php" ?>
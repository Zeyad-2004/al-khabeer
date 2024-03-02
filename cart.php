<?php require_once "main-component/header.php" ?>
<?php require_once "main-component/navbar.php" ?>

<section id="cart">
    <header>
        <h1>السلة</h1>
    </header>
    <section id="cart-content">
        <div class="course-details"></div>
    </section>
    <section id="cart-price">
        <div class="breaf">
            <h1>لديك قسيمة شراء؟ أنقر هنا لإدخال رمز القسيمة</h1>
            <div class="buttons">
                <button class="refresh">
                    <p>تحديث سلة الشراء</p>
                </button>
                <button class="update">
                    <p>متابعة التسوق</p>
                </button>
            </div>
        </div>
        <div class="prices">
            <div class="price-line">
                <h1>إجمالي سلة الشراء</h1>
                <p>ر.س415.00</p>
            </div>

            <div class="line"></div>

            <div class="price-line">
                <h1>الإجمالي</h1>
                <p>ر.س415.00</p>
            </div>

            <div class="line"></div>

            <div class="price-line">
                <h1>المبلغ قبل رسوم الشحن</h1>
                <p>ر.س415.00</p>
            </div>
        </div>

    </section>
    <div class="submit">
        <button class="submit-cart">
            <p>المتابعة الي الدفع</p>
        </button>
    </div>
</section>

<?php require_once "main-component/footer.php" ?>
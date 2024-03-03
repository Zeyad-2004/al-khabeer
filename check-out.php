<?php include "./main-component/header.php" ?>
<?php include "./main-component/navbar.php" ?>

<section class="container-fluid checkout-container">
    <section class="container checkout-wrapper d-flex">
        <!-- ===================================================
        ======== LEFT-SECTION ==================================
        ======================================================== -->
        <section class="left-section container-fluid">
            <div class="left-section-wrapper">
                <h1>Payment</h1>
                <div class="line-breaker"></div>
                <div class="payment-method">
                    <div>Pay With:</div>
                    <form action="">
                        <span>
                            <label for="">Card</label>
                            <input type="radio" name="" id="">
                        </span>
                        <span>
                            <label for="">Bank</label>
                            <input type="radio" name="" id="">
                        </span>
                        <span>
                            <label for="">Transfer</label>
                            <input type="radio" name="" id="">
                        </span>
                    </form>
                </div>
            </div>
        </section>
        <!-- ===================================================
        ======== RIGHT-SECTION ==================================
        ======================================================== -->
        <section class="right-section container-fluid">
            <div class="right-section-wrapper">
                <h1>Order Summary</h1>
                <div class="line-breaker"></div>
                <div class="product-wrapper d-flex">
                    <img src="media/main/autocad.png" alt="product-img">
                    <div class="product d-flex justify-content-between container-fluid">
                        <span>
                            <div class="product-title">AutoCAD Course</div>
                            <div class="product-desc">Lorem, ipsum dolor.</div>
                        </span>
                        <span class="product-price">$49.80</span>
                    </div>
                </div>
                <div class="line-breaker"></div>
                <form class="discount-code">
                    <input type="text" name="discount-code" id="discount-code" placeholder="Gift or discount code">
                    <button type="submit">Apply</button>
                </form>
                <div class="line-breaker"></div>
                <div class="sub-total">
                    <span>Subtotal</span>
                    <span>$49.80</span>
                </div>
                <div class="line-breaker"></div>
                <div class="total">
                    <span>
                        <div>Total</div>
                        <div class="taxes">Including $2.24 in taxes</div>
                    </span>
                    <span>
                        $59.28
                    </span>
                </div>
            </div>
        </section>
    </section>
</section>

<?php include "./main-component/footer.php" ?>
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
                    <div class="paywith" >Pay With:</div>
                    <form action="" class="payment-options d-flex">
                        <span>
                            <input type="radio" name="option-1" id="option-1">
                            <label for="option-1">Card</label>
                        </span>
                        <span>
                            <input type="radio" name="option-2" id="option-2">
                            <label for="option-2">Bank</label>
                        </span>
                        <span>
                            <input type="radio" name="option-3" id="option-3">
                            <label for="option-3">Transfer</label>
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
                <form class="discount-code d-flex">
                    <input type="text" name="discount-code" id="discount-code" placeholder="Gift or discount code">
                    <button type="submit">Apply</button>
                </form>
                <div class="line-breaker"></div>
                <div class="sub-total d-flex justify-content-between">
                    <span>Subtotal</span>
                    <span>$49.80</span>
                </div>
                <div class="line-breaker"></div>
                <div class="total d-flex justify-content-between">
                    <span>
                        <div class="total-title" >Total</div>
                        <div class="taxes">Including $2.24 in taxes</div>
                    </span>
                    <span class="total-price" >
                        $59.28
                    </span>
                </div>
            </div>
        </section>
    </section>
</section>

<?php include "./main-component/footer.php" ?>
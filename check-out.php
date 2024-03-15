<?php include "./main-component/header.php" ?>
<?php include "./main-component/navbar.php" ?>

<script src="js/<?php echo pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) ?>.js"></script>

<section class="checkout-container">
    <section class="checkout-wrapper d-flex justify-content-center">
        <!-- ===================================================
        ======== LEFT-SECTION ==================================
        ======================================================== -->
        <section class="left-section">
            <div class="left-section-wrapper">
                <h1>Payment</h1>
                <div class="line-breaker"></div>
                <div class="payment-method">
                    <div class="paywith">Pay With:</div>
                    <form action="" method="post" class="payment-options d-flex">
                        <span>
                            <input type="radio" onchange="submit()" name="option1" id="option-1">
                            <label for="option-1">Card</label>
                        </span>
                        <span>
                            <input type="radio" onchange="submit()" name="option2" id="option-2">
                            <label for="option-2">Bank</label>
                        </span>
                        <span>
                            <input type="radio" onchange="submit()" name="option3" id="option-3">
                            <label for="option-3">Transfer</label>
                        </span>

                    </form>
                </div>
                <!-- start of forms -->
                <div class="forms">
                <!-- ===================================================
                ========card form ==================================
                ======================================================== -->
                <?php if (isset($_POST["option1"]) && $_POST["option1"] == "on") : ?>
                    <?php unset($_POST) ?>
                    <script>
                        change_radio_active(1);
                    </script>

                    <div class="card-form">
                        <form class="card" method="post" action="">
                            <div class="c-number">
                                <h6>Card Number</h6>
                                <input placeholder="123 456 789" type="number">
                            </div>
                            <div class="expiration">
                                <div class="date">
                                    <h6>Expiration Date</h6>
                                    <input type="date">
                                </div>
                                <div class="cvv">
                                    <h6>CVV</h6>
                                    <input type="number" placeholder="123">
                                </div>
                            </div>
                            <div class="btt">
                                <div class="radio">
                                <div>
                                    <input class="form-check-input login-check-box checkbox-danger" type="checkbox"
                                    id="checkboxNoLabel" value="" aria-label="...">
                                </div>
                                    <h5>save card details</h5>
                                </div>
                                <button name="sub" type="submit">Pay USD59.28</button>
                                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                            </div>
                        </form>

                    </div>

                    <!-- ===================================================
                ======== bank form==================================
                ======================================================== -->
                <?php elseif (isset($_POST["option2"]) && $_POST["option2"] == "on") : ?>
                    <script>
                        change_radio_active(2);
                    </script>

                    <div class="bank-form">
                        <form class="bank" method="post" action="">

                            <select name="" placeholder="Choose your bank" id="">
                                <option value="" disabled selected hidden>Choose your bank</option>

                                <option disabled value="">Access Bank</option>
                                <option value="United Bank for Africa (UBA)">United Bank for Africa (UBA)</option>
                                <option value="Keystone Bank">Keystone Bank</option>
                                <option value="Sterling Bank">Sterling Bank</option>
                                <option value="Zenith Bank">Zenith Bank</option>
                                <option value="Union Bank">Union Bank</option>
                                <option value="Kuda Microfinamce Bank">Kuda Microfinamce Ban</option>
                                <option value="First Bank">First Bank</option>
                            </select>
                            <div>
                                <h6>Enter Your Bank Account Number</h6>
                                <input type="number" name="" id="">
                            </div>
                            <button type="submit">Pay USD59.28</button>
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        </form>

                    </div>
                <?php elseif (isset($_POST["option3"]) && $_POST["option3"] == "on") : ?>
                    <script>
                        change_radio_active(3);
                    </script>

                    <div class="transfer-form">
                        <form class="transfer" method="post" action="">
                            <p>Transfer USD49.80 to:</p>
                            <div class="polaris">
                                <h4>Polaris Bank</h4>
                                <div>
                                    <h1>0123456781</h1>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_43_16939)">
                                            <path d="M5.33301 10.6667V12.5334C5.33301 13.2801 5.33301 13.6535 5.47833 13.9387C5.60616 14.1896 5.81014 14.3936 6.06102 14.5214C6.34624 14.6667 6.7196 14.6667 7.46634 14.6667H12.533C13.2797 14.6667 13.6531 14.6667 13.9383 14.5214C14.1892 14.3936 14.3932 14.1896 14.521 13.9387C14.6663 13.6535 14.6663 13.2801 14.6663 12.5334V7.46671C14.6663 6.71997 14.6663 6.3466 14.521 6.06139C14.3932 5.8105 14.1892 5.60653 13.9383 5.4787C13.6531 5.33337 13.2797 5.33337 12.533 5.33337H10.6663M3.46634 10.6667H8.53301C9.27974 10.6667 9.65311 10.6667 9.93833 10.5214C10.1892 10.3936 10.3932 10.1896 10.521 9.93869C10.6663 9.65348 10.6663 9.28011 10.6663 8.53337V3.46671C10.6663 2.71997 10.6663 2.3466 10.521 2.06139C10.3932 1.8105 10.1892 1.60653 9.93833 1.4787C9.65311 1.33337 9.27974 1.33337 8.53301 1.33337H3.46634C2.7196 1.33337 2.34624 1.33337 2.06102 1.4787C1.81014 1.60653 1.60616 1.8105 1.47833 2.06139C1.33301 2.3466 1.33301 2.71997 1.33301 3.46671V8.53337C1.33301 9.28011 1.33301 9.65348 1.47833 9.93869C1.60616 10.1896 1.81014 10.3936 2.06102 10.5214C2.34624 10.6667 2.7196 10.6667 3.46634 10.6667Z" stroke="#ACACAC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_43_16939">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>Expires in <span>10:00</span> minutes</p>
                            </div>

                        </form>
                        <button type="submit">Confirm Payment</button>
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>

                    </div>
                </div>
                </div>
            </div>
        <?php endif ?>

        <?php if (isset($_POST['sub'])) : ?>
            <form action="">
                <p style="color:black">Enter your 4-digit card pin to confirm this payment</p>
                <div class="squares">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">


                </div>
                </div>
                <button type="submit">Pay USD59.28</button>
                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                </div>
            </form>
        <?php endif ?>

        <!-- ===================================================
======== transfer form ==================================
======================================================== -->


        </div>
                <!-- end of forms -->
            </div>



        </section>
        <!-- ===================================================
        ======== RIGHT-SECTION ==================================
        ======================================================== -->
        <section class="right-section">
            <div class="right-section-wrapper">
                <h1>Order Summary</h1>
                <div class="line-breaker"></div>
                <div class="product-wrapper d-flex">
                    <img src="media/main/autocad.png" alt="product-img">
                    <div class="product d-flex justify-content-between">
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
                        <div class="total-title">Total</div>
                        <div class="taxes">Including $2.24 in taxes</div>
                    </span>
                    <span class="total-price">
                        $59.28
                    </span>
                </div>
            </div>
        </section>
    </section>
</section>

<?php include "./main-component/footer.php" ?>
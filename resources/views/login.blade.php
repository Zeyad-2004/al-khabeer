<x-header :pageName="$page_name"/>
<x-navbar :pageName="$page_name"/>

<section class="login-page container-fluid">
    <section class="sections-container row">
        <section class="col-6 right-section"></section>

        <section class="col-6 left-section d-flex justify-content-between flex-column">
            <h1>حسابي</h1>
            <div class="login-section d-flex flex-column gap-3">
                <h3>تسجيل الدخول</h3>
                <form action="" class="d-flex flex-column gap-3">
                    <input type="text" name="login-name" id="login-name" placeholder="الاسم">
                    <div class="password-field">
                        <input class="password" type="password" name="login-password" id="login-password"
                            placeholder="كلمة المرور">
                        <i class="fa-solid fa-eye show-pass" id="login"></i>
                    </div>
                    <div class="forgot-remember d-flex align-items-center justify-content-between">
                        <a href="#">هل نسيت كلمة المرور</a>
                        <div class="remember-me d-flex align-items-center gap-2">
                            <div>
                                <input class="form-check-input login-check-box checkbox-danger" type="checkbox"
                                    id="checkboxNoLabel" value="" aria-label="...">
                            </div>
                            <span>تذكرني</span>
                        </div>
                    </div>
                    <button type="submit" class="mt-3">تسجيل الدخول</button>
                </form>
            </div>
            <div class="break-line"></div>
            <div class="signup-section d-flex flex-column gap-3">
                <h3>انشاء حساب</h3>
                <form action="" class="d-flex flex-column gap-3">
                    <input type="text" name="register-name" id="register-name" placeholder="الاسم">
                    <input type="email" name="register-email" id="register-email" placeholder="الايميل">

                    <div class="row g-3">
                        <div class="col-lg-6">
                            <input type="text" name="register-phone" id="register-phone" placeholder="الجوال">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="register-city" id="register-city" placeholder="المدينة">
                        </div>
                    </div>
                    <div class="password-field">
                        <input class="password" type="password" name="register-password" id="register-password"
                            placeholder="كلمة المرور">
                        <i class="fa-solid fa-eye show-pass" id="register"></i>
                    </div>
                    <button type="submit" class="mt-4">انشاء حساب</button>
                </form>
            </div>
        </section>

    </section>
</section>

<x-footer :pageName="$page_name"/>
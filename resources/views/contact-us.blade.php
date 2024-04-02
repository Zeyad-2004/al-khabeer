<x-header :pageName="$page_name"/>
<x-navbar :pageName="$page_name"/>


<section id="hero">
    <div class="content">
        <h1>لوريم لوريم لوريم</h1>
        <h6>هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى)</h6>
    </div>
</section>

<section id="content">
    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41556.93251614749!2d46.671371123953826!3d24.74948266501022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f026dbbf7a31f%3A0xf8461675a7c66027!2sRiyadh%20International%20Convention%20%26%20Exhibition%20Center!5e0!3m2!1sen!2seg!4v1708860503486!5m2!1sen!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section id="contact-form">
        <div class="text">
            <h1>راسلنا</h1>
            <p>سوف نقوم بالرد عليك في اقرب فرصة</p>
        </div>
        <div class="form">
            <form action="contact-us.php" method="post" class="row g-3">
                
                <div class="col-md-6 line">
                    <span class="mobile-input-label">الاسم الكامل*</span>
                    <input type="text" name="name" placeholder="الاسم" required>
                </div>
                <div class="col-md-6 line">
                    <span class="mobile-input-label">البريد الالكتروني*</span>
                    <input type="email" name="email "placeholder="الايميل" required>
                </div>
                
                <div class="col-md-6 line">
                    <span class="mobile-input-label">رقم الهاتف*</span>
                    <input type="text" name="phone-no" placeholder="رقم الهاتف">
                </div>
                <div class="col-md-6 line">
                    <span class="mobile-input-label">الدولة / مدينة*</span>
                    <input type="text" name="country-city" placeholder="الدولة - مدينة">
                </div>
                
                <div class="col-md-12 line">
                    <span class="mobile-input-label">برجاء كتابة الرسالة*</span>
                    <textarea name="message" rows="7" placeholder="رسالتك" required></textarea>
                </div>

                <div class="col-md-12 line form-submit">
                    <button type="submit" class="btn btn-primary">
                        <h1>ارسال</h1>
                    </button>
                </div>
            </form>
        </div>
    </section>
</section>

<x-footer :pageName="$page_name"/>
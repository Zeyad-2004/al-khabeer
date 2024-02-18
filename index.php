<?php require_once "main-component/header.php" ?>
<?php require_once "main-component/navbar.php" ?>

<section id="homepage-hero">
    <div class="content">
        <h1>استثمر في ذاتك</h1>
        <h6>واحصل على المعرفة التي تلزمك للخطوة القادمة مع عشرات البرامج الاحترافية في تخصصك</h6>

        <button><a href="#">ابحث هنا</a></button>
    </div>
</section>

<section class="courses">
    <div class="courses-header d-flex justify-content-between align-items-center">
        <div class="title">دوراتنا</div>
        <a href="#" class="d-flex justify-content-center align-items-center">اكتشف المزيد<i class="bx bx-chevron-left"></i></a>
    </div>
    <div id="courses-content" class="courses-content d-flex gap-5 flex-wrap">
        <?php include("main-component/product-card.php") ?>
        <?php include("main-component/product-card.php") ?>
        <?php include("main-component/product-card.php") ?>
        <?php include("main-component/product-card.php") ?>
        <?php include("main-component/product-card.php") ?>
        <?php include("main-component/product-card.php") ?>
        <?php include("main-component/product-card.php") ?>
        <?php include("main-component/product-card.php") ?>
    </div>
    <div class="scroll-buttons">
        <button onclick="scrollButtons(this.id)" class="right" id="r-courses-content"><i class="fa-solid fa-chevron-right"></i></button>
        <button onclick="scrollButtons(this.id)" class="left" id="l-courses-content"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
</section>

<section class="strong_points">
    <div class="top-sec">
        <h3>نقاط القوة</h3>
        <div class="line"></div>
    </div>

    <div class="center-sec">
        <!-- item 1 -->
        <div class="item">
            <div class="photo">
                <svg width="54" height="54" viewBox="0 0 55 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.4032 -1.40071e-06C25.2112 -1.40071e-06 27.8212 0.701999 30.2332 2.106C32.5732 3.474 34.4362 5.346 35.8222 7.722C37.2082 10.098 37.9012 12.69 37.9012 15.498C37.9012 17.766 37.4332 19.917 36.4972 21.951C35.5612 23.985 34.2652 25.731 32.6092 27.189C30.9532 28.647 29.0812 29.7 26.9932 30.348C30.3412 30.996 33.3652 32.31 36.0652 34.29C38.7652 36.27 40.8892 38.682 42.4372 41.526C44.0212 44.442 44.8132 47.52 44.8132 50.76V52.272C44.8132 52.74 44.6512 53.145 44.3272 53.487C44.0032 53.829 43.5892 54 43.0852 54H1.72116C1.25316 54 0.848164 53.829 0.506164 53.487C0.164164 53.145 -0.00683594 52.74 -0.00683594 52.272V50.76C-0.00683594 47.52 0.785164 44.442 2.36916 41.526C3.91716 38.682 6.04116 36.27 8.74116 34.29C11.4412 32.31 14.4652 30.996 17.8132 30.348C15.7252 29.7 13.8532 28.647 12.1972 27.189C10.5412 25.731 9.24516 23.985 8.30916 21.951C7.37316 19.917 6.90516 17.766 6.90516 15.498C6.90516 12.69 7.59816 10.098 8.98416 7.722C10.3702 5.346 12.2332 3.474 14.5732 2.106C16.9852 0.701999 19.5952 -1.40071e-06 22.4032 -1.40071e-06ZM22.4032 33.318C19.0192 33.318 15.8512 34.128 12.8992 35.748C10.0192 37.332 7.73316 39.438 6.04116 42.066C4.31316 44.802 3.44916 47.7 3.44916 50.76V50.544H41.3572V50.22C41.2492 47.268 40.3582 44.514 38.6842 41.958C37.0102 39.402 34.8232 37.368 32.1232 35.856C29.2792 34.272 26.2372 33.426 22.9972 33.318H22.4032ZM53.3452 21.06C53.7052 21.312 53.9212 21.645 53.9932 22.059C54.0652 22.473 53.9932 22.878 53.7772 23.274L44.4892 34.938C44.2012 35.298 43.8322 35.514 43.3822 35.586C42.9322 35.658 42.5092 35.55 42.1132 35.262L37.2532 30.51C36.9292 30.186 36.7672 29.79 36.7672 29.322C36.7672 28.854 36.9202 28.458 37.2262 28.134C37.5322 27.81 37.9012 27.63 38.3332 27.594C38.7652 27.558 39.1612 27.666 39.5212 27.918L42.9772 31.32L50.9152 21.33C51.2032 20.97 51.5812 20.763 52.0492 20.709C52.5172 20.655 52.9492 20.772 53.3452 21.06ZM22.4032 3.456C20.2432 3.456 18.2362 3.996 16.3822 5.076C14.5282 6.156 13.0612 7.623 11.9812 9.477C10.9012 11.331 10.3612 13.347 10.3612 15.525C10.3612 17.703 10.9012 19.719 11.9812 21.573C13.0612 23.427 14.5192 24.894 16.3552 25.974C18.1912 27.054 20.2072 27.594 22.4032 27.594C24.5992 27.594 26.6152 27.054 28.4512 25.974C30.2872 24.894 31.7452 23.427 32.8252 21.573C33.9052 19.719 34.4452 17.703 34.4452 15.525C34.4452 13.347 33.9052 11.331 32.8252 9.477C31.7452 7.623 30.2782 6.156 28.4242 5.076C26.5702 3.996 24.5632 3.456 22.4032 3.456Z" fill="#FD9802" />
                </svg>
            </div>
            <div class="t">
                <h1 class="title">صلاحية مدى الحياة</h1>
                <p class="sub-title">للاحتفاظ بكافة المواد العلمية والمصورة والاطلاع عليها وتحديثها بنسخ مزيدة ومنقحة بمجرد الحصول على البرنامج.</p>
            </div>
        </div>
        <!-- item 2 -->
        <div class="item">
            <div class="photo">

                <svg width="54" height="54" viewBox="0 0 65 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.9286 34.857C12.4554 34.857 11.1942 34.3325 10.1451 33.2834C9.09598 32.2343 8.57143 30.9731 8.57143 29.4999V5.92847C8.57143 4.45525 9.09598 3.19409 10.1451 2.14499C11.1942 1.09588 12.4554 0.571327 13.9286 0.571327H50.3571C51.8304 0.571327 53.0915 1.09588 54.1406 2.14499C55.1897 3.19409 55.7143 4.45525 55.7143 5.92847V29.4999C55.7143 30.9731 55.1897 32.2343 54.1406 33.2834C53.0915 34.3325 51.8304 34.857 50.3571 34.857H13.9286ZM12.8571 5.92847V29.4999C12.8571 29.7901 12.9632 30.0412 13.1752 30.2532C13.3873 30.4653 13.6384 30.5713 13.9286 30.5713H50.3571C50.6473 30.5713 50.8984 30.4653 51.1105 30.2532C51.3225 30.0412 51.4286 29.7901 51.4286 29.4999V5.92847C51.4286 5.63829 51.3225 5.38717 51.1105 5.17512C50.8984 4.96307 50.6473 4.85704 50.3571 4.85704H13.9286C13.6384 4.85704 13.3873 4.96307 13.1752 5.17512C12.9632 5.38717 12.8571 5.63829 12.8571 5.92847ZM58.9286 36.9999H64.2857V40.2142C64.2857 41.107 63.7612 41.866 62.7121 42.491C61.6629 43.116 60.4018 43.4285 58.9286 43.4285H5.35714C3.88393 43.4285 2.62277 43.116 1.57366 42.491C0.524554 41.866 0 41.107 0 40.2142V36.9999H5.35714H58.9286ZM34.8214 40.2142C35.1786 40.2142 35.3571 40.0356 35.3571 39.6785C35.3571 39.3213 35.1786 39.1428 34.8214 39.1428H29.4643C29.1071 39.1428 28.9286 39.3213 28.9286 39.6785C28.9286 40.0356 29.1071 40.2142 29.4643 40.2142H34.8214Z" fill="#FD9802" />
                </svg>
            </div>

            <div class="t">
                <h1 class="title">تدريب احترافي</h1>
                <p class="sub-title"> من خلال فريق عمل مؤهل لعشرات السنوات من العمل
                    في حقل التدريب في المملكة العربية السعودية.</p>
            </div>
        </div>
        <!-- item 3 -->
        <div class="item">
            <!-- item 3 -->
            <div class="photo">

                <svg width="54" height="54" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.6867 21.96C30.0933 21.96 30.3983 21.8583 30.6017 21.655C30.805 21.4517 30.9067 21.1806 30.9067 20.8417C30.9067 20.5028 30.805 20.1978 30.6017 19.9267C30.3983 19.6556 30.1272 19.52 29.7883 19.52C29.4494 19.52 29.1444 19.6556 28.8733 19.9267C28.6022 20.1978 28.4667 20.5028 28.4667 20.8417C28.4667 21.1806 28.6022 21.4517 28.8733 21.655C29.1444 21.8583 29.4156 21.96 29.6867 21.96ZM22.3667 21.96C22.6378 21.96 22.9089 21.8583 23.18 21.655C23.4511 21.4517 23.5867 21.1806 23.5867 20.8417C23.5867 20.5028 23.4511 20.1978 23.18 19.9267C22.9089 19.6556 22.6378 19.52 22.3667 19.52C22.0956 19.52 21.8244 19.6556 21.5533 19.9267C21.2822 20.1978 21.1467 20.5028 21.1467 20.8417C21.1467 21.1806 21.2822 21.4517 21.5533 21.655C21.8244 21.8583 22.0956 21.96 22.3667 21.96ZM54.4933 24.6033C54.2222 24.6033 53.985 24.705 53.7817 24.9083C53.5783 25.1117 53.4767 25.3828 53.4767 25.7217C53.4767 26.0606 53.5783 26.3656 53.7817 26.6367C53.985 26.9078 54.2222 27.0433 54.4933 27.0433C55.7133 27.0433 56.6961 27.4161 57.4417 28.1617C58.1872 28.9072 58.56 29.8222 58.56 30.9067V48.8C58.56 50.02 58.1872 51.0028 57.4417 51.7483C56.6961 52.4939 55.7133 52.8667 54.4933 52.8667H26.6367C25.5522 52.8667 24.6033 52.4939 23.79 51.7483C22.9767 51.0028 22.57 50.02 22.57 48.8V30.9067C22.57 29.8222 22.9767 28.9072 23.79 28.1617C24.6033 27.4161 25.5522 27.0433 26.6367 27.0433H43.92C44.1911 27.0433 44.4283 26.9078 44.6317 26.6367C44.835 26.3656 44.9367 26.0606 44.9367 25.7217C44.9367 25.3828 44.835 25.1117 44.6317 24.9083C44.4283 24.705 44.1911 24.6033 43.92 24.6033H36.3967C36.5322 23.79 36.6 22.9767 36.6 22.1633V17.08H38.2267C38.4978 17.08 38.7689 16.9783 39.04 16.775C39.3111 16.5717 39.4467 16.3344 39.4467 16.0633V11.7933C39.4467 9.62444 38.9044 7.65889 37.82 5.89667C36.7356 4.13445 35.2783 2.71111 33.4483 1.62667C31.6183 0.542221 29.6189 0 27.45 0C25.8233 0 24.3322 0.440556 22.9767 1.32167C21.6211 2.20278 20.6044 3.38889 19.9267 4.88C17.8933 5.01556 16.2328 5.795 14.945 7.21833C13.6572 8.64167 13.0133 10.3022 13.0133 12.2V15.6567C13.0133 16.1989 13.2506 16.5378 13.725 16.6733C14.1994 16.8089 14.7078 16.9444 15.25 17.08V22.1633C15.25 23.9256 15.6906 25.62 16.5717 27.2467C17.4528 28.8733 18.6389 30.1611 20.13 31.11V31.9233H18.7067C15.3178 31.9233 12.2 32.7706 9.35333 34.465C6.50667 36.1594 4.23611 38.43 2.54167 41.2767C0.847222 44.1233 0 47.3089 0 50.8333V53.8833C0 55.7811 0.711667 57.4417 2.135 58.865C3.55833 60.2883 5.21889 61 7.11667 61H51.24C51.6467 61 51.9517 60.8983 52.155 60.695C52.3583 60.4917 52.46 60.2206 52.46 59.8817C52.46 59.5428 52.3583 59.2378 52.155 58.9667C51.9517 58.6956 51.6467 58.56 51.24 58.56H50.2233C51.0367 57.6111 51.5789 56.5267 51.85 55.3067H54.4933C56.3911 55.3067 57.95 54.6628 59.17 53.375C60.39 52.0872 61 50.5622 61 48.8V30.9067C61 29.1444 60.39 27.6533 59.17 26.4333C57.95 25.2133 56.3911 24.6033 54.4933 24.6033ZM35.99 55.3067V58.56H29.0767V57.95C29.0767 57.0011 28.8056 56.12 28.2633 55.3067H35.99ZM27.45 2.44C30.1611 2.44 32.4317 3.355 34.2617 5.185C36.0917 7.015 37.0067 9.21778 37.0067 11.7933V14.8433H27.45C25.8233 14.8433 24.4 14.2333 23.18 13.0133C21.96 11.7933 21.35 10.3361 21.35 8.64167C21.35 6.94722 21.96 5.49 23.18 4.27C24.4 3.05 25.8233 2.44 27.45 2.44ZM15.25 12.2C15.25 11.1156 15.6228 10.0989 16.3683 9.15C17.1139 8.20111 18.0289 7.59111 19.1133 7.32L18.91 8.54C18.91 10.3022 19.3844 11.9289 20.3333 13.42C18.8422 14.64 17.1478 15.0467 15.25 14.64V12.2ZM17.69 22.1633V17.08C19.3167 16.8089 20.74 16.1311 21.96 15.0467C23.5867 16.4022 25.4167 17.08 27.45 17.08H34.3633V22.1633C34.3633 22.9767 34.2278 23.79 33.9567 24.6033H26.6367C25.2811 24.6033 24.0611 24.9761 22.9767 25.7217C21.8922 26.4672 21.1467 27.3822 20.74 28.4667C19.7911 27.7889 19.0456 26.8739 18.5033 25.7217C17.9611 24.5694 17.69 23.3833 17.69 22.1633ZM7.11667 58.56C5.76111 58.56 4.64278 58.1194 3.76167 57.2383C2.88056 56.3572 2.44 55.2389 2.44 53.8833V50.8333C2.44 47.8511 3.15167 45.1061 4.575 42.5983C5.99833 40.0906 7.99778 38.0911 10.5733 36.6C13.1489 35.1089 15.86 34.3633 18.7067 34.3633H20.13V48.8C20.13 49.6133 20.2656 50.3589 20.5367 51.0367H11.9967C11.7256 51.0367 11.4544 51.1383 11.1833 51.3417C10.9122 51.545 10.7767 51.8161 10.7767 52.155C10.7767 52.4939 10.9122 52.765 11.1833 52.9683C11.4544 53.1717 11.7256 53.2733 11.9967 53.2733H20.13V58.56H7.11667ZM22.57 58.56V55.3067H23.9933C24.6711 55.3067 25.2811 55.5778 25.8233 56.12C26.3656 56.6622 26.6367 57.2722 26.6367 57.95V58.56H22.57ZM38.43 55.3067H42.9033V58.56H38.43V55.3067ZM45.3433 58.56V55.3067H49.41C49.1389 56.2556 48.6306 57.035 47.885 57.645C47.1394 58.255 46.2922 58.56 45.3433 58.56ZM40.6667 35.5833C39.4467 35.5833 38.3961 35.99 37.515 36.8033C36.6339 37.6167 36.1933 38.6333 36.1933 39.8533C36.1933 41.0733 36.6339 42.1239 37.515 43.005C38.3961 43.8861 39.4467 44.3267 40.6667 44.3267C41.8867 44.3267 42.9033 43.8861 43.7167 43.005C44.53 42.1239 44.9367 41.0733 44.9367 39.8533C44.9367 38.6333 44.53 37.6167 43.7167 36.8033C42.9033 35.99 41.8867 35.5833 40.6667 35.5833ZM40.6667 41.8867C39.9889 41.8867 39.4806 41.7172 39.1417 41.3783C38.8028 41.0394 38.6333 40.565 38.6333 39.955C38.6333 39.345 38.8028 38.8367 39.1417 38.43C39.4806 38.0233 39.955 37.82 40.565 37.82C41.175 37.82 41.6833 38.0233 42.09 38.43C42.4967 38.8367 42.7 39.345 42.7 39.955C42.7 40.565 42.4967 41.0394 42.09 41.3783C41.6833 41.7172 41.2089 41.8867 40.6667 41.8867ZM49.2067 27.0433C49.4778 27.0433 49.7489 26.9078 50.02 26.6367C50.2911 26.3656 50.4267 26.0606 50.4267 25.7217C50.4267 25.3828 50.2911 25.1117 50.02 24.9083C49.7489 24.705 49.4778 24.6033 49.2067 24.6033C48.9356 24.6033 48.6644 24.705 48.3933 24.9083C48.1222 25.1117 47.9867 25.3828 47.9867 25.7217C47.9867 26.0606 48.1222 26.3656 48.3933 26.6367C48.6644 26.9078 48.9356 27.0433 49.2067 27.0433Z" fill="#FD9802" />
                </svg>
            </div>

            <div class="t">
                <h1 class="title">خبراء دوليون</h1>
                <p class="sub-title">نسعى للتعاقد مع أفضل الخبرات في المجالات الاستشارية والتدريبية عملا بأفضل المعايير في انتاج البرامج</p>
            </div>
        </div>
        <!-- item 4 -->
        <div class="item">
            <!-- item 4 -->
            <div class="photo">

                <svg width="54" height="54" viewBox="0 0 34 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.058 39.6439C25.326 39.6439 26.964 40.8139 27.972 43.1539C28.728 44.8819 29.106 47.0419 29.106 49.6339C29.106 51.0379 28.683 52.1449 27.837 52.9549C26.991 53.7649 25.848 54.1699 24.408 54.1699H9.126C7.722 54.1699 6.597 53.7649 5.751 52.9549C4.905 52.1449 4.482 51.0379 4.482 49.6339C4.482 47.0059 4.842 44.8459 5.562 43.1539C6.606 40.8139 8.262 39.6439 10.53 39.6439C10.638 39.6439 10.944 39.8059 11.448 40.1299C12.276 40.7059 12.996 41.1199 13.608 41.3719C14.652 41.8399 15.714 42.0739 16.794 42.0739C17.874 42.0739 18.936 41.8399 19.98 41.3719C20.592 41.1199 21.312 40.7059 22.14 40.1299C22.644 39.8059 22.95 39.6439 23.058 39.6439ZM2.16 31.8139C2.232 31.8139 2.448 31.9039 2.808 32.0839C3.456 32.4439 3.996 32.6959 4.428 32.8399C5.22 33.1279 5.976 33.2719 6.696 33.2719C7.524 33.2719 8.298 33.1459 9.018 32.8939C8.982 33.1459 8.964 33.5239 8.964 34.0279C8.964 35.6839 9.432 37.1779 10.368 38.5099C8.46 38.5819 6.912 39.3199 5.724 40.7239H3.402C2.43 40.7239 1.638 40.5079 1.026 40.0759C0.342 39.5719 0 38.8699 0 37.9699V37.2679C0 35.8999 0.126 34.7659 0.378 33.8659C0.702 32.4979 1.296 31.8139 2.16 31.8139ZM16.794 27.3319C18.018 27.3319 19.134 27.6289 20.142 28.2229C21.15 28.8169 21.96 29.6269 22.572 30.6529C23.184 31.6789 23.49 32.8039 23.49 34.0279C23.49 35.2519 23.184 36.3769 22.572 37.4029C21.96 38.4289 21.15 39.2389 20.142 39.8329C19.134 40.4269 18.018 40.7239 16.794 40.7239C15.57 40.7239 14.445 40.4269 13.419 39.8329C12.393 39.2389 11.574 38.4289 10.962 37.4029C10.35 36.3769 10.044 35.2519 10.044 34.0279C10.044 32.8039 10.35 31.6789 10.962 30.6529C11.574 29.6269 12.393 28.8169 13.419 28.2229C14.445 27.6289 15.57 27.3319 16.794 27.3319ZM31.374 31.8139C32.31 31.8139 32.94 32.6419 33.264 34.2979C33.444 35.1619 33.534 36.3499 33.534 37.8619V37.9699C33.534 38.8699 33.192 39.5719 32.508 40.0759C31.896 40.5079 31.122 40.7239 30.186 40.7239H27.81C27.234 40.0399 26.55 39.5089 25.758 39.1309C24.966 38.7529 24.12 38.5459 23.22 38.5099C24.156 37.1059 24.624 35.6119 24.624 34.0279C24.624 33.7759 24.588 33.3979 24.516 32.8939C25.236 33.1459 26.01 33.2719 26.838 33.2719C27.594 33.2719 28.368 33.1279 29.16 32.8399C29.628 32.6599 30.168 32.4079 30.78 32.0839C31.104 31.9039 31.302 31.8139 31.374 31.8139ZM6.696 22.8499C7.956 22.8499 9.018 23.2819 9.882 24.1459C10.746 25.0099 11.178 26.0629 11.178 27.3049C11.178 28.5469 10.737 29.6089 9.855 30.4909C8.973 31.3729 7.92 31.8139 6.696 31.8139C5.472 31.8139 4.419 31.3729 3.537 30.4909C2.655 29.6089 2.214 28.5559 2.214 27.3319C2.214 26.1079 2.655 25.0549 3.537 24.1729C4.419 23.2909 5.472 22.8499 6.696 22.8499ZM26.838 22.8499C28.098 22.8499 29.16 23.2819 30.024 24.1459C30.888 25.0099 31.32 26.0629 31.32 27.3049C31.32 28.5469 30.879 29.6089 29.997 30.4909C29.115 31.3729 28.062 31.8139 26.838 31.8139C25.614 31.8139 24.561 31.3729 23.679 30.4909C22.797 29.6089 22.356 28.5559 22.356 27.3319C22.356 26.1079 22.797 25.0549 23.679 24.1729C24.561 23.2909 25.614 22.8499 26.838 22.8499ZM16.902 0.169922C18.09 0.169922 19.242 0.43092 20.358 0.952919C21.474 1.47492 22.374 2.20392 23.058 3.13992C23.778 4.14792 24.138 5.26392 24.138 6.48792C24.138 7.92792 23.652 9.16992 22.68 10.2139C21.996 10.9699 21.492 11.5999 21.168 12.1039C20.628 12.8959 20.34 13.6339 20.304 14.3179C20.52 14.4259 20.682 14.5879 20.79 14.8039C20.898 15.0199 20.952 15.2359 20.952 15.4519C20.952 15.8479 20.844 16.1539 20.628 16.3699C20.844 16.5859 20.952 16.9099 20.952 17.3419C20.952 17.7739 20.754 18.1339 20.358 18.4219C20.466 18.5659 20.52 18.7819 20.52 19.0699C20.52 19.5019 20.376 19.8349 20.088 20.0689C19.8 20.3029 19.44 20.4199 19.008 20.4199C18.828 20.8159 18.549 21.1399 18.171 21.3919C17.793 21.6439 17.379 21.7699 16.929 21.7699C16.479 21.7699 16.065 21.6439 15.687 21.3919C15.309 21.1399 15.03 20.8159 14.85 20.4199C14.418 20.4199 14.058 20.3029 13.77 20.0689C13.482 19.8349 13.338 19.5019 13.338 19.0699C13.338 18.7819 13.392 18.5659 13.5 18.4219C13.068 18.0979 12.852 17.7199 12.852 17.2879C12.852 16.9279 12.978 16.6219 13.23 16.3699C12.978 16.1179 12.852 15.8119 12.852 15.4519C12.852 15.2359 12.915 15.0199 13.041 14.8039C13.167 14.5879 13.338 14.4259 13.554 14.3179C13.518 13.6339 13.23 12.8959 12.69 12.1039C12.366 11.5999 11.862 10.9699 11.178 10.2139C10.206 9.16992 9.72 7.92792 9.72 6.48792C9.72 5.26392 10.08 4.14792 10.8 3.13992C11.448 2.20392 12.33 1.47492 13.446 0.952919C14.562 0.43092 15.714 0.169922 16.902 0.169922ZM16.902 1.95192C16.038 1.95192 15.192 2.14092 14.364 2.51892C13.536 2.89692 12.852 3.40992 12.312 4.05792C11.772 4.77792 11.502 5.58792 11.502 6.48792C11.502 6.91992 11.592 7.36092 11.772 7.81092C11.952 8.26092 12.186 8.64792 12.474 8.97192L13.338 9.94392C14.526 11.4199 15.192 12.8059 15.336 14.1019H18.522C18.666 12.6979 19.332 11.3119 20.52 9.94392L21.384 8.97192C21.672 8.64792 21.897 8.26092 22.059 7.81092C22.221 7.36092 22.302 6.91992 22.302 6.48792C22.302 5.58792 22.041 4.79592 21.519 4.11192C20.997 3.42792 20.322 2.89692 19.494 2.51892C18.666 2.14092 17.802 1.95192 16.902 1.95192ZM16.902 4.21992C17.694 4.21992 18.396 4.39992 19.008 4.75992C19.728 5.19192 20.088 5.76792 20.088 6.48792C20.088 6.59592 20.043 6.69492 19.953 6.78492C19.863 6.87492 19.755 6.91992 19.629 6.91992C19.503 6.91992 19.395 6.87492 19.305 6.78492C19.215 6.69492 19.17 6.59592 19.17 6.48792C19.17 6.05592 18.882 5.71392 18.306 5.46192C17.874 5.24592 17.406 5.13792 16.902 5.13792C16.794 5.13792 16.695 5.09292 16.605 5.00292C16.515 4.91292 16.47 4.80492 16.47 4.67892C16.47 4.55292 16.515 4.44492 16.605 4.35492C16.695 4.26492 16.794 4.21992 16.902 4.21992Z" fill="#FD9802" />
                </svg>
            </div>

            <div class="t">
                <h1 class="title">مواد علمية حصرية</h1>
                <p class="sub-title"> نوفرها للمشاركين في برامجنا التدريبية بأنواعها المختلفة من مصادرها الرئيسية وشبكة شركائنا.</p>
            </div>
        </div>
    </div>
</section>

<section id="trainers" class="flex">
    <div class="intro">
        <h1>تعرف على مدربينا وتابعهم</h1>
        <h4> أفضل الخبرات في المجالات الاستشارية والتدريبية عملا بأفضل المعايير في انتاج البرامج</h4>
    </div>
    <div class="slider flex">
        <div class="wrapper flex container-fluid">
            <div class="cards flex row container-fluid" id="trainers-cards">
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="background">
                        <div class="trainer-photo">
                            <div class="roll">
                                مدرب
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="trainer-data">
                            <h1>زياد طارق</h1>
                            <h4>سينيور جرافيك ديزاينر</h4>
                        </div>
                        <div class="trainer-social">
                            <div class="followers">11148 متابع</div>

                            <a href="#" class="follow flex">
                                <h1>متابعة</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigator flex">

        <label for="radio1" class="radio" onclick="setTrainers(this)">
            <input type="radio" name="radio-btn" id="radio1">
        </label>

        <label for="radio2" class="radio" onclick="setTrainers(this)">
            <input type="radio" name="radio-btn" id="radio2">
        </label>

        <label for="radio3" class="radio" onclick="setTrainers(this)">
            <input type="radio" name="radio-btn" id="radio3">
        </label>
    </div>
</section>



<?php require_once "main-component/footer.php" ?>
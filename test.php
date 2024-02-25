<?php require_once "main-component/header.php" ?>
<?php require_once "main-component/navbar.php" ?>

<nav class="page-pagination">
    <ul class="pagination justify-content-center my-5">
        <div class="cont d-flex justify-content-center align-items-center">

            <li class="page-item-nav prev d-flex flex-column justify-content-center">
                <a class="page-link-nav d-flex justify-content-evenly gap-1" href="#">
                    <svg style="transform: rotate(180deg);" width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black"></path>
                    </svg>
                    <h6 style="margin: 0;">التالي</h6>
                </a>
            </li>
            
            <li class="page-item">
                <a class="page-link" href="#">50</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">...</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item pagination-active">
                <a class="page-link" href="#">1</a>
            </li>
            
            <li class="page-item-nav next d-flex flex-column justify-content-center">
                <a class="page-link-nav d-flex justify-content-evenly gap-1"href="#"> 
                    <h6 style="margin: 0;">السابق</h6>
                    <svg width="15" height="16" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.75 6C0.75 5.75391 0.832031 5.53516 0.996093 5.37109L5.37109 0.996094C5.69922 0.640625 6.27344 0.640625 6.60156 0.996094C6.95703 1.32422 6.95703 1.89844 6.60156 2.22656L2.85547 6L6.60156 9.74609C6.95703 10.0742 6.95703 10.6484 6.60156 10.9766C6.27344 11.332 5.69922 11.332 5.37109 10.9766L0.996093 6.60156C0.832031 6.4375 0.75 6.21875 0.75 6Z" fill="black"></path>
                    </svg>
                </a>
            </li>
        </div>
    </ul>
</nav>


<?php require_once "main-component/footer.php" ?>
<?php
include '../headerFront.php';
include '../../Controller/UserC.php';
include '../../Controller/ReviewsC.php';

$user = new UserC;


$eid = $_SESSION['id'];


// (B) UPDATE STAR RATINGS
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["message"]) && isset($_POST["stars"]) && isset($_POST["eid"])) {
        if ($_STARS->enregistrerReviews($eid, $_POST["stars"], $_POST["message"])) {
            $error = "rating updated";
			
            echo "<script type='text/javascript'>alert('$error');</script>";
        } else {
			
            echo "<script type='text/javascript'>alert('$_STARS->error');</script>";
        }
    }
}

// (C) GET RATINGS
// $average = $_STARS->avg(); // AVERAGE RATINGS
//  $ratings = $_STARS->afficherReviews($uid); // RATINGS BY CURRENT USER


?>

<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Contact Us</h1>
            <nav aria-label="breadcrumb animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/header.jpg" alt="">
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">

</div>
<!-- Search End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Contact Us</h1>

        </div
        
        >
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-light rounded p-3">
                            <div class="d-flex align-items-center bg-white rounded p-3"
                                style="border: 1px dashed rgba(0, 185, 142, .3)">
                                <div class="icon me-3" style="width: 45px; height: 45px;">
                                    <i class="fa fa-map-marker-alt text-primary"></i>
                                </div>
                                <span>123 Street, New York, USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="bg-light rounded p-3">
                            <div class="d-flex align-items-center bg-white rounded p-3"
                                style="border: 1px dashed rgba(0, 185, 142, .3)">
                                <div class="icon me-3" style="width: 45px; height: 45px;">
                                    <i class="fa fa-envelope-open text-primary"></i>
                                </div>
                                <span>info@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-light rounded p-3">
                            <div class="d-flex align-items-center bg-white rounded p-3"
                                style="border: 1px dashed rgba(0, 185, 142, .3)">
                                <div class="icon me-3" style="width: 45px; height: 45px;">
                                    <i class="fa fa-phone-alt text-primary"></i>
                                </div>
                                <span>+012 345 6789</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.5s">

                    <form id="ninForm" method="post" target="_self">

                        <input id="ninPdt" type="hidden" name="eid" />
                        <input id="ninStar" type="hidden" name="stars" />

                        <!--div for rating star-->
                        <h4 class="mb-4">How likely are you to recommend our service to a friend or coleague? </h4>

                        <div class="eStar" data-eid="<?= $uid ?>"><?php
                                                                    $rate = isset($ratings[$eid]) ? $ratings[$eid] : 0;
                                                                    for ($i = 1; $i <= 5; $i++) {
                                                                        $css = $i <= $rate ? "star" : "star blank";
                                                                        echo "<div class='$css' data-i='$i'></div>";
                                                                    }





                                                                    ?></div><!-- end of rating star-->
                        <br />

                        <h4 class="mb-4">What feature can we add to improve? </h4>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" style="height: 150px"
                                    placeholder="We'd love to hear your suggestions" name="message"> </textarea>

                            </div>
                        </div>
                        <br />
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Submit</button>
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link text-white-50" href="">About Us</a>
                <a class="btn btn-link text-white-50" href="">Contact Us</a>
                <a class="btn btn-link text-white-50" href="">Our Services</a>
                <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Photo Gallery</h5>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
.eStar {
    display: flex;
}

.eStar .star {
    width: 36px;
    height: 36px;
    background-image: url("../Front/img/stars.png");
    cursor: pointer;
}

.eStar .star.blank {
    background-position: -36px;
}

.eStat {
    font-size: 15px;
    color: #787878;
}
</style>

<script>
var stars = {
    // (A) INIT - ATTACH HOVER & CLICK EVENTS
    init: () => {
        for (let d of document.getElementsByClassName("eStar")) {
            let all = d.getElementsByClassName("star");
            for (let s of all) {
                s.onmouseover = () => {
                    stars.hover(all, s.dataset.i);
                };
                s.onclick = () => {
                    stars.click(d.dataset.eid, s.dataset.i);
                };
            }
        }
    },

    // (B) HOVER - UPDATE NUMBER OF YELLOW STARS
    hover: (all, rating) => {
        let now = 1;
        for (let s of all) {
            if (now <= rating) {
                s.classList.remove("blank");
            } else {
                s.classList.add("blank");
            }
            now++;
        }
    },

    // (C) CLICK - SUBMIT FORM
    click: (eid, rating) => {
        document.getElementById("ninPdt").value = eid;
        document.getElementById("ninStar").value = rating;
        document.getElementById("ninForm").submit();
    }
};
window.addEventListener("DOMContentLoaded", stars.init);
</script>
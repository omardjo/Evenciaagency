<?php
session_start();
include '..\..\Controller\UserC.php';
$userC = new UserC();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myemail = $_POST['email'];
    $mypassword = $_POST['password'];

    $userC->loginPart($myemail, $mypassword);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Evencia Agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../Front/img/icon-deal.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Front/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Front/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <br><br>
                    <a href="../home/index.php" class="navbar-brand d-flex align-items-center text-center">
                        <div class="icon p-2 me-2">
                            <img class="img-fluid" src="../Front/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                        </div>
                        <h1 class="m-0 text-primary"> Evencia Agency </h1>
                    </a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Sign In</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded p-3">

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded p-3">

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="margin-left: 20%;">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">You have no account? <a href="ajouterUserFront.php">sing up now</a>.</p>
                            <form action="" method="post">
                                <div class="row g-3">

                                    <div class="col-12">
                                        <div class="form-floating">
                                        <span id="message2" style="color:red;"></span>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Votre Email"  onkeyup='validate();'>
                                       <label for="subject"> Your Email </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe">
                                            <label for="password"> Your Password </label>
                                        </div>
                                    </div> </label><br /><br />
                                    <label>

                                    </label><br />


                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>
                                            Rôle: <br />
                                            <select name="role">
                                                <option value="participant"> Participant</option>
                                            </select>
                                        </label><br /><br />

                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit"> Sign In </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


        <script>
    

            function validateEmail(email) {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            }

            function validate() {
                var input = document.createElement('input');
                input.type = 'email';
                input.value = document.getElementById('email').value;

                if (input.checkValidity()) {
                    document.getElementById('message2').style.color = 'green';
                    document.getElementById('message2').innerHTML = 'valid Email';
                } else {
                    document.getElementById('message2').style.color = 'red';
                    document.getElementById('message2').innerHTML = 'unvalid Email';
                }

                return false;
            }
        </script>

  


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Front/lib/wow/wow.min.js"></script>
    <script src="../Front/lib/easing/easing.min.js"></script>
    <script src="../Front/lib/waypoints/waypoints.min.js"></script>
    <script src="../Front/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../Front/js/main.js"></script>

    <style>
     #message2 {

        margin-left:400px;
     }

    </style>
</body>

</html>
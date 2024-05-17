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

        <?php
        session_start();
        if (isset($_SESSION['id'])) : ?>

            <!-- Navbar Start -->
            <div class="container-fluid nav-bar bg-transparent">
                <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                    <a href="../home/index.php" class="navbar-brand d-flex align-items-center text-center">
                        <div class="icon p-2 me-2">
                            <img class="img-fluid" src="../Front/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                        </div>
                       <h1 class="m-0 text-primary"> Evencia Agency </h1> 
                        
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="../home/index.php" class="nav-item nav-link">Home</a>
                            <a href="../home/about.php" class="nav-item nav-link"> About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Our Events</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../event/afficherAllEventFront.php" class="dropdown-item">All Events</a>
                                    <a href="../categorie/afficherCategorieFront.php" class="dropdown-item"> Event per Category </a>

                                </div>
                            </div>

                            <a href="../home/contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        
                        <a>        

                            <i class="fa fa-user"></i>

                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <?php echo $_SESSION['username']; ?></a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../user/my-profile.php" class="dropdown-item">My profile</a>
                                    <a href="../../Views/user/logout.php" class="dropdown-item">Logout</a>

                                </div>
                            </div>
                         </a>


                        
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->
            <br><br><br>







        <?php else : ?>

            <!-- Navbar Start -->
            <div class="container-fluid nav-bar bg-transparent">
                <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="../home/index.php" class="navbar-brand d-flex align-items-center text-center">
                        <div class="icon p-2 me-2">
                            <img class="img-fluid" src="../Front/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                        </div>
                        <h1 class="m-0 text-primary"> Evencia Agency </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="../home/index.php" class="nav-item nav-link">Home</a>
                            <a href="../home/about.php" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Our Events</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../event/afficherAllEventFront.php" class="dropdown-item"> All Events </a>
                                    <a href="../categorie/afficherCategorieFront.php" class="dropdown-item"> Event per Category </a>

                                </div>
                            </div>

                            <a href="../home/contact.php" class="nav-item nav-link"> Contact </a>
                        </div>
                        <a href="../user/signin.php" class="btn btn-primary py-2 px-3 me-3 animated fadeIn"><i class="fa fa-id-card" ></i> Sign in </a>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->
            <br><br><br>
        <?php endif; ?>



        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../Front/lib/wow/wow.min.js"></script>
        <script src="../Front/lib/easing/easing.min.js"></script>
        <script src="../Front/lib/waypoints/waypoints.min.js"></script>
        <script src="../Front/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="../Front/js/main.js"></script>

</body>

</html>
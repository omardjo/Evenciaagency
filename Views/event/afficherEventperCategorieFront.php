
<?php
include '../headerFront.php';
include '../../Controller/FavsController.php';
include '..\..\Controller\EventC.php';
$eventC = new EventC(); //obtention de f°;
$listeEvents = $eventC->afficherEventParCategorie($_GET['CategorieId']);

if (isset($_POST['nom'])) {
    $_GET["event_id"]=0;
    $listeEvents = $eventC->rechercheEvent(
        $_POST['nom'],
        $_POST['lieu'],
        $_POST['date'],
        $_POST['description']
    );
}

if (isset($_POST['date'])) {
    $_GET["event_id"]=0;
    $listeEvents = $eventC->rechercheEvent(
        $_POST['nom'],
        $_POST['lieu'],
        $_POST['date'],
        $_POST['description']
    );
}



	
	if($_GET["event_id"] >= 1 )
		$eventC->ajouterFavories($_GET["user_id"],$_GET["event_id"]);
	

	
?>


 <!-- Header Start -->
 <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4"> Event Per category </h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page"> Event per category </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="../../Front/img/header.jpg" alt="">
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
                            <div class="col-md-4">
                               
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
         
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End --> 


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3"> Event Listing  </h1>
                            <p> Welcome Dear participant ! <br> This is the Event Listing per category represented by Evencia Agency ! </p>
                        </div>
                    </div>

                   

                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                        <?php foreach (
                                        $listeEvents
                                        as $event
                                    ) { ?>	

                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid rounded w-100" src="images/<?php echo $event[
                                                'image'
                                            ]; ?> " alt="">
                                <div class="property-item rounded overflow-hidden" >
                                    <div class="position-relative overflow-hidden">
                                      
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a href="afficherEventperCategorieFront.php?event_id=<?php echo $event['id']; ?>&user_id=1&CategorieId=<?php echo $event['categorieId']; ?>" class="heart d-flex justify-content-center align-items-center " name="favs">
                                               <i class="fa fa-heart"></i></a>
                                    <img src="">
                                        <h5 class="text-primary mb-3"><?php echo $event[
                                                'nom'
                                            ]; ?></h5>
                                        <a class="d-block h5 mb-2" href=""><?php echo $event[
                                                'lieu'
                                            ]; ?></a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $event[
                                                'lieu'
                                            ]; ?></p>
                                            <p><i class="fa fa-edit text-primary me-2"></i><?php echo $event[
                                                'description'
                                            ]; ?></p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?php echo $event[
                                                'date'
                                            ]; ?></small>
                                           </div>
                                </div>
                            </div>

                            <?php } ?>
                                      
                                
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="afficherAllEventFront.php"> <i class="fa fa-search" aria-hidden="true"></i> Browse More Events </a>
                            </div>
                        </div>
                        <br>
                     </div>         
                           <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="../categorie/afficherCategorieFront.php"><i class="fa fa-search" aria-hidden="true"></i> Browse More categories </a>
                            </div>
                       
                    </div>
                    </div>
                   
                   
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



</body>

</html>

<?php 
include '../footerFront.php';
?>
<?php
include '../headerBack.php';

include '../../Controller\EventC.php';

?>

<body>
    <div class="h3 mb-2 text-gray-800">


        <h2>
            <center><img class="img" src="../event/images/admin-icon.png"/>  Interface Admin </center>
        </h2>
        <h1 >
          <center>  Bienvenu Cher Administrateur ! </center>
        </h1>
<div style="margin-top:60px;margin-left:430px" > 
        <button type="button" class="btn btn-dark mb-2 mr-2">
<a href="../event/afficherEventBack.php">  
    <span > Gestion des évènements</span>
    <i class="fas fa-arrow-right"></i>
</a>
  </button>
</div>

<div style="margin-top:60px;margin-left:430px" > 
        <button type="button" class="btn btn-dark mb-2 mr-2">
<a href="../categorie/afficherCategorieBack.php">  
    <span > Gestion des catégories </span>
    <i class="fas fa-arrow-right"></i>
</a>
  </button>
</div>

<div style="margin-top:60px;margin-left:430px" > 
        <button type="button" class="btn btn-dark mb-2 mr-2">
<a href="../user/afficherUserBack.php">  
    <span > liste des utilisateurs </span>
    <i class="fas fa-arrow-right"></i>
</a>
  </button>
</div>

    </div>
<style>
  body {
    font-family: " Montserrat", sans-serif; font-weight: 300; line-height: 1.45; color: #0F1108; } h1 { font-size: 2.2rem; margin: 0; font-weight: 600; line-height: 1.15; } 
    .btn-dark {
    color: #fff;
    background-color: #1e2022;
    border-color: #1e2022;
    
}
.img{

    width: 50px;
    height: auto;
}


    </style>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
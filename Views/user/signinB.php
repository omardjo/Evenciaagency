<?php

include '..\..\Controller\UserC.php';
session_start();
$userC = new UserC();
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $email = $_POST['email'];
   $password =$_POST['password']; 
   
   $userC->loginAdOrg($email,$password);
   
 
}
?>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title> EvenciaAgency_Dashboard</title>

<!-- Custom fonts for this template-->
<link href="../Back/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="../Back/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="body">
    <div class="row">

    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"> Sign in  </h1>
            </div>
            <form class="user" method="POST" >
               
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        Email: <br>
                        <input type="text" name="email" class="form-control form-control-user" id="exampleFirstName"
                            placeholder="Email">
                    </div>

                </div>


                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        Mot de passe <br>
                        <input type="text" name="password" class="form-control form-control-user" id="exampleFirstName"
                            placeholder=" Mot de passe">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>
                            Rôle: <br />
                            <select name="role">

                        
                                <option value="administrateur"> Administrateur</option>
                                <option value="organisateur"> Organisateur</option>
                            </select>
                        </label><br /><br />

                    </div>
                </div>

                <input type="submit"  class="btn btn-primary btn-user btn-block"
                    value="Login"></input>
 <br/> </br>
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> EvenciaAgency <sup>*</sup> Dashboard <sup>*</sup></div>
            </a>
            </form>
            <hr>

        </div>
    </div>
</div>
</body>
<style>
.body {
 margin-left:25%;
}
</style>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
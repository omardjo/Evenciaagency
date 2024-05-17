<?php

include '../headerFront.php';
include '../../Controller/UserC.php';

$userC = new UserC();

$error = "";
$user = null;
if (

    isset($_POST["email"]) &&
    isset($_POST["password"])


) {
    if (


        !empty($_POST["email"]) &&
        !empty($_POST["password"])
        // !empty($_POST["CategorieId"])
    ) { }
     else
        $error = "Missing information";
}

?>



<!--end navbar-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active">Data</li>
</ol>
<!--end breadcrumb-->
</div>
<!--end container-->
</div>
<!--============ End Main Navigation ================================================================-->
<!--============ Hero Form ==========================================================================-->

<!--end collapse-->
<!--============ End Hero Form ======================================================================-->
<!--============ Page Title =========================================================================-->
<div class="page-title">
    <div class="container">
        <h1>My Profile</h1>
    </div>
    <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<div class="background"></div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<!--end hero-->

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<section class="content">
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav class="nav flex-column side-nav">

                    </nav>
                </div>
                <!--end col-md-3-->
                <div class="col-md-9">

                    <form class="form" mathod="POST">
                        <div class="row">
                            <div class="col-md-8">
                                <h2>Personal Information</h2>
                                <section>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <!--end form-group-->
                                        </div>
                                        <label for="id">
                                        </label>


                                        <!--end col-md-8-->
                                    </div>
                                    <!--end row-->

                                    <!--end form-group-->

                                    <!--end form-group-->
                                </section>

                                <section>
                                    <h2>Contact</h2>
 
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Email:</label>
                                        <input name="email" type="text" class="form-control" id="email" placeholder=" votre email" value="<?php echo $_SESSION['email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label required">Votre Mot de passe:</label>
                                        <input name="password" type="text" class="form-control" id="password" placeholder="votre mdp" value="<?php echo $_SESSION['password'] ?>" required>
                                    </div>
                                    <!--end form-group-->
                                </section>


                            </div>
                            <!--end col-md-8-->

                            <!--end col-md-3-->
                        </div>

                    </form>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>
<!--end content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
<br><br><br>
<!--end footer-->
</div>
<!--end page-->


</body>

</html>
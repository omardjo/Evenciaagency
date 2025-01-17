
<?php
include '../headerBack.php';

include '../../Controller/EventC.php';
$eventC = new EventC(); //obtention de f°
$listeEvents = $eventC->afficherEvent();

if (isset($_POST['nom'])) {
    $listeEvents = $eventC->rechercheEvent(
        $_POST['nom'],
        $_POST['image'],
        $_POST['lieu'],
        $_POST['date'],
        $_POST['description'],
        $_POST['categorieId'],

    );
}
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"> <center> Tables des évènements <center> </h1>
                    <p class="mb-4"> </p>
                    <a href="afficherEventtri.php"> <center> ---Trier la liste par catégorie !--- <center> </a> 
                            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">°°°°°°° Evènements °°°°°°° </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id </th>
                                            <th> Nom </th>
                                            <th> Image </th>
                                            <th> Lieu </th>
                                            <th> Date </th>
                                            <th> Description </th>
                                            <th> catégorieId </th>
                                            <th> Accepted </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id </th>
                                            <th> Nom </th>
                                            <th> Image </th>
                                            <th> Lieu </th>
                                            <th> Date </th>
                                            <th> Description </th>
                                            <th> catégorieId </th>
                                            <th> Accepted </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>  
                                    <?php foreach (
                                        $listeEvents
                                        as $event
                                    ) { ?>	
                                        <tr>
                                            <td><?php echo $event[
                                                'id'
                                            ]; ?></td>
                                            <td><?php echo $event[
                                                'nom'
                                            ]; ?></td>
                                            <td><?php echo $event[
                                                'image'
                                            ]; ?></td>
                                            <td><?php echo $event[
                                                'lieu'
                                            ]; ?></td>
                                            <td><?php echo $event[
                                                'date'
                                            ]; ?></td>
                                           
                                            <td><?php echo $event[
                                                'description'
                                            ]; ?></td>
                                            <td><?php echo $event[
                                                'categorieId'
                                            ]; ?></td>
                                            <td><?php echo $event[
                                                'accepter'
                                            ]; ?></td>
                                             <td>     
                                             <a href="accepterEventBack.php?id=<?php echo $event[
                                                'id'
                                            ]; ?>"  class="" >Accepter
                                                    </a>
                                             </td>

                                            <td>     
                                             <form method="POST" action="modifierEventBack.php">
                                            <input type="submit" name="Modifier" value="Modifier" class="btn btn-primary btn-block text-uppercase sm-1">
                                            <input type="hidden" value=<?php echo $event['id']; ?> name="id">
                                              </form>
                                        </td>
                                        <td>     
                                            <form method="POST" action="../event/ajouterEventBack.php?id=<?php echo $event['id']?>">
						<input type="submit" name="event" value=" ajouter " class="btn btn-secondary btn-block text-uppercase sm-1">
						<input type="hidden" value=<?php echo $event['id']; ?> name="id">
					</form>
                </td>
                <td>
				<a href="supprimerEventBack.php?id=<?php echo $event[
        'id'
    ]; ?>"  class="tm-product-delete-link" >
				<i class="far fa-trash-alt tm-product-delete-icon"></i>
			</a>
			
                    
                    </td>
                                        </tr>
                                        <?php } ?>
                                      
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> Dashboard &copy; Evencia_Agency </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
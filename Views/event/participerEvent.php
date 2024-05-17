<?php
	include '../../Controller/participerC.php';
	$participant=new participerC();
	$participant->participer($_GET['userId'],$_GET['id']);
    header("Location:afficherAllEventFront.php");

	
?>
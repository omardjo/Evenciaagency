<?php
session_start();
session_destroy();
header("Location:signinB.php");
exit();
?>
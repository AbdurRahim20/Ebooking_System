<?php 
session_start();
unset($_SESSION["usertype"]);
session_destroy();
header("location:../../sector-login.php");
?>
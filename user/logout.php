<?php 
session_start();
unset($_SESSION["usertype"]);
session_destroy();
echo "<script>window.open('user-login.php','_self')</script>";
?>
<?php 

$con=new mysqli("localhost","root","","e-booking");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>
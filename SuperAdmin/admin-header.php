<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<title>User Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
	
		</nav>



		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="admin-dashboard.php"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="addsector.php" ><i class="fas fa-plus-circle"></i> <span>Add Sector</span></a></li>	
						<li><a href="Allsector.php" ><i class="lnr lnr-store"></i> <span>All Sector</span></a></li>	
						<li><a href="addadmin.php" ><i class="fas fa-plus-circle"></i> <span>Add Admin</span></a></li>	
						<li><a href="Alladmin.php" ><i class="lnr lnr-users"></i> <span>All Admin</span></a></li>
						<li><a href="Allcompany.php" ><i class="lnr lnr-store"></i> <span>All Company</span></a></li>
						<li><a href="Alluser.php" ><i class="lnr lnr-users"></i> <span>All User</span></a></li>
						<li><a href="profile.php" ><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
						<li><a href="logout.php" ><i class="lnr lnr-exit"></i> <span>Log Out</span></a></li>

					</ul>
				</nav>
			</div>
		</div>

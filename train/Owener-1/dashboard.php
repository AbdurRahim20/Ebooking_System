<?php
session_start();
include "header.php";
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
			
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"></button>
				</div>
			
			
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
                    <li><a href="#"><i class="lnr lnr-user"></i> <span><?php echo $_SESSION["UName"]; ?></span></a></li>
					<li><a href="logout.php" data-toggle="modal" data-target="#logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>	
					
                </ul>
				</div>
			</div>
		</nav>



		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					<li><a href="dashboard.php"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="train.php"><i class="lnr lnr-plus-circle"></i> <span>Add New Train</span></a></li>
						<li><a href="route.php" ><i class="lnr lnr-gift"></i> <span>Routes</span></a></li>
						<li><a href="schedule.php"><i class="lnr lnr-users"></i> <span>Schedule</span></a></li>
						<li><a href="users.php"><i class="lnr lnr-enter-down"></i> <span>All User</span></a></li>
						<li><a href="allowener.php"><i class="lnr lnr-sync"></i> <span>All Owener</span></a></li>
						<li><a href="report.php"><i class="lnr lnr-sync"></i> <span>All Report</span></a></li>
						<li><a href="profile.php" class=""><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
						<li><a href="view-pay-elec.php" class=""><i class="fas fa-money-bill-alt"></i> <span>Payment</span></a></li>	
						<li><a href="complain.php" class=""><i class="lnr lnr-bubble"></i> <span>Complain</span></a></li>
						<li><a href="search.php" class=""><i class="lnr lnr-magnifier"></i> <span>Search</span></a></li>
						<li><a href="logout.php" class=""><i class="lnr lnr-exit"></i> <span>Log Out</span></a></li>

					</ul>
				</nav>
			</div>
		</div>



		


								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	

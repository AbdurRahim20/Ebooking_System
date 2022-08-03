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
    
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/css/main.css">

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
						
                    <li><a href="#"><i class="lnr lnr-user"></i> <span><?//php echo $_SESSION["UName"]; ?></span></a></li>
					<li><a href="logout.php" data-toggle="modal" data-target="#logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>	
					
                </ul>
				</div>
			</div>
		</nav>



		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="section-dashboard.php" class="active"><i class="nav-icon fas fa-tachometer-alt"></i> <span>Home</span></a></li>
						<li><a href="electricityPkg.php" class=""><i class="fa fa-plus nav-icon"></i> <span>New Booking</span></a></li>
						<li><a href="AllelectricityPkg.php" class=""><i class="fa fa-book nav-icon"></i> <span>View Bookings</span></a></li>
						<li><a href="user-pkg-elec.php" class=""><i class="fa fa-mail-bulk nav-icon"></i> <span>Feedback</span></a></li>
						<li><a href="logout.php" class=""><i class="nav-icon fas fa-power-off"></i> <span>Log Out</span></a></li>

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
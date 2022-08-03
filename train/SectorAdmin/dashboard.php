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



		
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

body{
background:#eee;
font-family: 'Raleway', sans-serif;
}
.main-part{
width:100%;
margin:0 auto;
text-align: center;
padding: 0px 5px;
}
.cpanel{
width:32%;
display: inline-block;
background-color:#34495E;
color:#fff;
margin-top: 50px;
}
.icon-part i{
font-size: 30px;
padding:10px;
border:2px solid #fff;
border-radius:50%;
margin-top:-25px;
margin-bottom: 10px;
background-color:#34495E;
}
.icon-part p{
margin:0px;
font-size: 25px;
padding-bottom: 50px;
}
.card-content-part{
background-color: #2F4254;
padding: 5px 0px;
}
.cpanel .card-content-part:hover{
background-color: #5a5a5a;
cursor: pointer;
}
.card-content-part a{
color:#fff;
text-decoration: none;
}
.cpanel-green .icon-part,.cpanel-green .icon-part i{
background-color: #16A085;
}
.cpanel-green .card-content-part{
background-color: #149077;
}
.cpanel-orange .icon-part,.cpanel-orange .icon-part i{
background-color: #F39C12;
}
.cpanel-orange .card-content-part{
background-color: #DA8C10;
}
.cpanel-blue .icon-part,.cpanel-blue .icon-part i{
background-color: #2980B9;
}
.cpanel-blue .card-content-part{
background-color:#2573A6;
}
.cpanel-red .icon-part,.cpanel-red .icon-part i{
background-color:#E74C3C;
}
.cpanel-red .card-content-part{
background-color:#CF4436;
}
.cpanel-skyblue .icon-part,.cpanel-skyblue .icon-part i{
background-color:#8E44AD;
}
.cpanel-skyblue .card-content-part{
background-color:#803D9B;
}

</style>
<body>	
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title"><b>Welcome <?php echo $_SESSION["Name"]; ?> Dashboard</b></h3>
						</div>
						
						<div class="panel-body">	
						<div class="main-part">
							
						<div class="cpanel cpanel-green">
						<div class="icon-part">
						<i class="fa fa-store" aria-hidden="true"></i><br>
						<large>Total Package</large>
						<p>6</p>
						</div>
						<div class="card-content-part">
						<a href="AllelectricityPkg.php">More Details </a>
						</div>
						</div>

						<div class="cpanel">
						<div class="icon-part">
						<i class="fa fa-users" aria-hidden="true"></i><br>
						<large>Total User</large>
						<p>6</p>
						</div>
						<div class="card-content-part">
						<a href="user-pkg-elec.php">More Details </a>
						</div>
						</div>

						<div class="cpanel cpanel-orange">
						<div class="icon-part">
						<i class="fa fa-plus" aria-hidden="true"></i><br>
						<large>New Request</large>
						<p>2</p>
						</div>
						<div class="card-content-part">
						<a href="electricityReq.php">More Details </a>
						</div>
						</div>

					
						<div class="cpanel cpanel-red">
						<div class="icon-part">
						<i class="fa fa-sync" aria-hidden="true"></i><br>
						<large>Change Request</large>
						<p>1</p>
						</div>
						<div class="card-content-part">
						<a href="elec-ChangeReq.php">More Details </a>
						</div>
						</div>

						<div class="cpanel cpanel-blue">
						<div class="icon-part">
						<i class="fa fa-money" aria-hidden="true"></i><br>
						<large>Total Payment</large>
						<p>BDT 1840</p>
						</div>
						<div class="card-content-part">
						<a href="view-pay-elec.php">More Details </a>
						</div>
						</div>

						<div class="cpanel cpanel-skyblue">
						<div class="icon-part">
						<i class="fa fa-comments" aria-hidden="true"></i><br>
						<large>Complain</large>
						<p>3</p>
						</div>
						<div class="card-content-part">
						<a href="Complain-view-elec.php">More Details </a>
						</div>
						</div>
						</div>

								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	

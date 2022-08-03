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
		<div class="brand">
				<a href="index.html"></a>
			</div>
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
						<div class="cpanel">
						<div class="icon-part">
						<i class="fa fa-store" aria-hidden="true"></i><br>
						<large>Total Sector</large>
						<p>4</p>
						</div>
						
						<div class="card-content-part">
						<a href="Allsector.php">More Details </a>
						</div>
						</div>
						<div class="cpanel cpanel-green">
						<div class="icon-part">
						<i class="fa fa-user" aria-hidden="true"></i><br>
						<large>Total Admin</large>
						<p>5</p>
						</div>
						<div class="card-content-part">
						<a href="Alladmin.php">More Details </a>
						</div>
						</div>
						<div class="cpanel cpanel-orange">
						<div class="icon-part">
						<i class="fa fa-building" aria-hidden="true"></i><br>
						<large>Total Company</large>
						<p>15</p>
						</div>
						<div class="card-content-part">
						<a href="Allcompany.php">More Details </a>
						</div>
						</div>
						<div class="cpanel cpanel-blue">
						<div class="icon-part">
						<i class="fa fa-users" aria-hidden="true"></i><br>
						<large>Total Users</large>
						<p>20</p>
						</div>
						<div class="card-content-part">
						<a href="Alluser.php">More Details </a>
						</div>
						</div>
						<div class="cpanel cpanel-red">
						<div class="icon-part">
						<i class="fa fa-comments" aria-hidden="true"></i><br>
						<large>Total Super Admin</large>
						<p>1</p>
						</div>
						<div class="card-content-part">
						<a href="profile.php">More Details </a>
						</div>
						</div>
						<div class="cpanel cpanel-skyblue">
						<div class="icon-part">
						<i class="fa fa-user" aria-hidden="true"></i><br>
						<large>Message</large>
						<p>13</p>
						</div>
						<div class="card-content-part">
						<a href="contactus.php">More Details </a>
						</div>
						</div>
						</div>

								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	

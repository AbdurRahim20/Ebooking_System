<?php 
session_start();
include('config.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:../index.php');
}
?>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Super admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
   </div>
    
    
    <div class="page-container">       
    
        
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.php" style="color:white"><b>E-BOOKING</b> </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li><a href="index.php"><span class="ti-layout-grid2-alt"></span> Dashboard</a></li>
                    <li><a href="index.php?page=add_subadmin"><span class="ti-lock"></span>Add Subadmin</a></li>
       <li><a href=""><span class="ti-user"></span>  op</a></li>
    
    <li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-money"></i></span>
<span class="pcoded-mtext">Drop</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="">
<span class="pcoded-mtext">op</span>
</a>
</li>
<li class="">
<a href="">
<span class="pcoded-mtext">op</span>
</a>
</li>
</ul>

</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-agenda"></i></span>
<span class="pcoded-mtext">drop1</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="">
<span class="pcoded-mtext">op</span>
</a>
</li>
<li class="">
<a href="">
<span class="pcoded-mtext">op</span>
</a>
</li>
<li class="">
<a href="">
<span class="pcoded-mtext">op</span>
</a>
</li>
</ul>
 <li><a href=""><span class="ti-face-smile"></span>oppp</a></li>
</li>
                </ul>
            </nav>
        </div>
    </div>
</div>


        <div class="main-content">
            
            <div class="header-area">
                <div class="row align-items-center">
                    
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="../assets/images/author/avatar.png" alt="avatar">
                           
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Welcome Super admin<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
   
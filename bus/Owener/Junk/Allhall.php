
<?php 
include "config.php";
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<title>ebooking system</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/css/main.css">

    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.dataTables.min.js" crossorigin='anonymous'> </script>
   
	
</head>

<body >
	
	<div id="wrapper"  >
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#06021a;" >
		
		<div class="container-fluid" >
		<div class="navbar-btn">
				<button type="button" class="btn-toggle-fullwidth"></button>
			</div>
			<div id="navbar-menu" >
				<ul class="nav navbar-nav navbar-left"style="color:rgb(16, 255, 247);">
					<li><h5 style="padding: 2px 2px;"><a><img src="upload/lg.png"></a></h5></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" ><i class="lnr lnr-user " style="color:aqua;"></i> <span style="color:#fff;"><?php echo $_SESSION["UName"]; ?></span></a></li>
					<li><a href="logout.php" data-toggle="modal" data-target="#logout"><i class="lnr lnr-exit"style="color:aqua;"></i> <span style="color:#fff;">Logout</span></a></li>		
				</ul>
			</div>
		</div>
	</nav>



	<div id="sidebar-nav" class="sidebar  mobile-offcanvas navbar navbar-expand-lg text-white"style="background-color:#000;">
	<div class="sidenavleft-adjust sticky-top">
	
			
	<div class="sidebar-scroll" >
			<nav >
			 <ul class="nav nav-pills nav-sidebar flex-column text-small nav-compact nav-flat nav-child-indent nav-collapse-hide-child " data-widget="treeview" role="menu" data-accordion="false">
					<li><a href="wedding-dashboard.php"style="color:#fff;"><i class="nav-icon fas fa-tachometer-alt"></i> <span style="color:#fff;">Dashboard</span></a></li>
					<li><a href="addhall.php" style="color:#fff;"><i class="fas fa-plus-circle" ></i> Add Hall</a></li>	
					<li><a href="Allhall.php" style="color:#fff;"><i class="nav-icon fas fa-door-closed"></i> All Hall</a></li>	
					<li><a href="addservice.php" style="color:#fff;"><i class="fas fa-plus-circle"></i>Add Service</a></li>	
					<li><a href="allservice.php" style="color:#fff;"><i class="nav-icon fas fa-th-list"></i>All Service</a></li>
					<li><a href="addowner.php" style="color:#fff;"><i class="fas fa-plus-circle"></i> Add Hall Owner</a></li>
					<li><a href="allowner.php" style="color:#fff;"><i class="nav-icon fas fa-user-friends"></i> All Owner</a></li>
					<li><a href="add-company.php" style="color:#fff;"><i class="nav-icon fas fa-clipboard-list"></i> Booking Application</a></li>
					<li><a href="Allcompany.php" style="color:#fff;"><i class="lnr lnr-magnifier"></i> Search Application</a></li>
					<li><a href="Alluser.php" style="color:#fff;"><i class="nav-icon fas fa-users-cog"></i> All client payment</a></li>
					<li><a href="contactus.php"style="color:#fff;"><i class="nav-icon fas fa-question-circle"></i>Queries</a></li>
					<li><a href="profile.php" style="color:#fff;"><i class="lnr lnr-user"></i> My Profile</a></li>
					<li><a href="logout.php"style="color:#fff;" ><i class="lnr lnr-exit"></i> Log Out</a></li>
				</ul>
			</nav>
		</div>
	</div>
	</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

.sidebar-scroll {
  height: 90%;
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 3;
  left: 0;
  overflow-x: hidden;
}
</style>

    <div class="main">    
    <div class="container mt-4 ">
        <div class="row">
            <div class="col-md-12" style="background:#FFFFFF ;">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 style="text-align:center ;"><b>ALL HALL LIST</b> </h3>
                    </div>
                    <div class="card-body table-responsive">
                
                    <table id="myDataTable"  class="table table-bordered ">
                        <thead class="text-dark bg-primary">
                            <tr>
                            <th>S.N</th>
                            <th>Image</th>
                            <th>Tour Place</th>
                            <th>Tour Date</th>
                            <th>Registraion Date</th>
                            <th>Cost</th>
                            <th>Action</th>                            
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                        $sql = "select * from `tour`";
                        $result = mysqli_query($con,$sql);


                        while($row=mysqli_fetch_assoc($result))
                        {
                           
                            ?>
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                               
                                <td> <img src="<?php echo "images/".$row['Img']; ?>" width="100px" alt="Image"></td>
                                <td><?php echo $row['Place']; ?></td>
                                <td><?php echo $row['Date']; ?></td>
                                <td><?php echo $row['Last_date']; ?></td>
                                <td><?php echo $row['Price']; ?></td>
    
                                <td> 
                                    <form action="edithall.php" method="post">
                                        <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
                                        <input type="submit" name="update" class="btn btn-primary" value="EDIT">
                                    </form>
                                
                                    <form action="" method="post">
                                        <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
                                        <input type="submit" name="delete" class="btn btn-danger" value="DELETE"> 
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                        if(isset($_POST['delete']))
                        {
                            $ID = $_POST['ID'];
                            $query = "DELETE FROM hall_list WHERE ID='$ID' ";
                            $query_run = mysqli_query($con, $query);
                        
                            if($query_run)
                            {
                                echo  '
                                <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success!</strong> Hall has been Successfully Delete.
                                </div>';
                            
                               
                            }
                            else
                            {
                                echo '<script> alert("Data Not Deleted"); </script>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>
    </div>
    </div>

    <script>
    $(document).ready( function () {
    $('#myDataTable').DataTable();
    } );
    </script>
    </body> 
</html>


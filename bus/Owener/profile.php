<?php include "header.php";
include('config.php');
session_start();
?>

<!doctype html>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">

    
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

*{
    font-family: cursive;
}

.page form {
    margin: 30px auto;
    width: 950px;
    padding: 0px 0px;
    background-color: #ffff;
}

</style>
         <?php
						
						$UName = $_SESSION['UName'];

						$sql = "SELECT * FROM allowener WHERE UName = '$UName'";
						$query = mysqli_query($con, $sql);
					
						while($row = mysqli_fetch_assoc($query)){
							$Director = $row['Director'];
              $CompanyName = $row['CompanyName'];
							$UName = $row['UName'];
							$Email = $row['Email'];
              $Phone = $row['Phone'];
							$Pass = $row['Pass'];
              $Sector = $row['Sector'];
              $Address = $row['Address'];
     
						}
					?>

<div class="main">
				<div class="container-fluid">
	

<div class="container-fluid">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header bg-danger text-white text-center">
                    <h4><b>MY PROFILE</b> </h4>
                </div>
   
                <div class="page">
                <form action="" method="POST">

                <?php
                 if(isset($_POST['submit'])){
                  // $ID = $_POST['ID'];
                   $Director = $_POST['Director'];
                   $CompanyName = $_POST['CompanyName'];
                   $UName = $_POST['UName'];
                   $Email = $_POST['Email'];
                   $Phone = $_POST['Phone'];
                   $Pass = $_POST['Pass'];
                   $Address = $_POST['Address'];

                   $sql1 = "UPDATE allowener SET Director='$Director', CompanyName='$CompanyName', UName='$UName',Email='$Email',Phone='$Phone',Pass='$Pass',Address='$Address' WHERE UName='$UName' ";

        if(mysqli_query($con, $sql1) == TRUE){
                  echo '
                  <div class="alert alert-success">
                    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Update.
                  </div>';
                
                }else{
                  echo "Data not update";
                }	
              }
                ?>
     
                              <div class="form-group row">
                                <label for="Name" class="col-4 col-form-label">Director Name</label> 
                                <div class="col-8">
                                  <input name="Name" placeholder="Your Name" class="form-control here" type="text" value="<?php echo $Director;?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="CompanyName" class="col-4 col-form-label">Company Name</label> 
                                <div class="col-8">
                                  <input name="CompanyName" placeholder="Your Company Name" class="form-control here" type="text" value="<?php echo $CompanyName;?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="UName" class="col-4 col-form-label">Username</label> 
                                <div class="col-8">
                                  <input  name="UName" class="form-control here" type="text" readonly value="<?php echo $UName;?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="Sector" class="col-4 col-form-label">Sector</label> 
                                <div class="col-8">
                                  <input  name="Sector"  class="form-control here" type="text" readonly value="<?php echo $Sector;?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="Email" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input name="Email" placeholder="Email" class="form-control here" type="text"  value="<?php echo $Email;?>">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="Phone" class="col-4 col-form-label">Phone</label> 
                                <div class="col-8">
                                  <input name="Phone" placeholder="Phone No" class="form-control here" type="text"  value="<?php echo $Phone;?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="Address" class="col-4 col-form-label">Address</label> 
                                <div class="col-8">
                                  <input name="Address" placeholder="Address" class="form-control here" type="text"  value="<?php echo $Address;?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="Pass" class="col-4 col-form-label">Password</label> 
                                <div class="col-8">
                                  <input  name="Pass" placeholder="Password" class="form-control here" type="text" value="<?php echo $Pass;?>">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-danger">Update My Profile</button>
                                </div>
                              </div>

      
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
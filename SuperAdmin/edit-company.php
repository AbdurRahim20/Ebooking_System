<?php 
include('config.php');
include('navbar.php');
error_reporting(0);
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<style>
       @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  
}
.signup-page h3 {
    margin: 20px 0px 30px;
    padding: 0px 0px 25px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    color: #ff2888;
}

.signup-page form {
    margin: 30px auto;
    border: 1px solid #e4e4e4;
    width: 900px;
    padding: 10px 25px;
    border-radius: 10px;
    box-shadow: 0 0px 6px rgba(173, 173, 173, 0.5);
}

.signup-page label {
    margin-bottom: 3px;
}

@media(max-width: 767px){
.signup-page form {
    width: 90%;
}
}
</style>
</head>
<body>
<?php						
					  $id = $_GET['id'];
						$sql = "SELECT * FROM allowener WHERE id=$id";
						$query = mysqli_query($con, $sql);
					
						while($row = mysqli_fetch_assoc($query)){
							$id = $row['id'];
							$CompanyName = $row['CompanyName'];
							$UName = $row['UName'];
              $Director = $row['Director'];
              $Est = $row['Est'];
              $Address = $row['Address'];
              $License = $row['License'];
							$Email = $row['Email'];
              $Sector = $row['Sector'];
							$Phone = $row['Phone'];
							$Pass = $row['Pass'];
              $CnPass = $row['CnPass'];
     
						}
					?>
    

        <?php
            if(isset($_POST['submit'])){
                  $id = $_POST['id'];
                  $CompanyName = $_POST['CompanyName'];
                  $UName = $_POST['UName'];
                  $Director = $_POST['Director'];
                  $Est = $_POST['Est'];
                  $Address = $_POST['Address'];
                  $License = $_POST['License'];
                  $Email = $_POST['Email'];
                  $Sector = $_POST['Sector'];
                  $Phone = $_POST['Phone'];
                  $Pass = $_POST['Pass'];
                  $CnPass = $_POST['CnPass'];
                  $sql1 = "UPDATE allowener SET Director='$Director',CompanyName='$CompanyName', UName='$UName',Director='$Director',Address='$Address',
                   License='$License',Email='$Email',Sector='$Sector',Phone='$Phone',Pass='$Pass',CnPass='$CnPass' WHERE id='$id' ";

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

<div class="signup-page">
					<form action="" method="POST">
      		<h3>Update Details</h3>
					
          <div class="form-group row">
                  <label for="Sector" class="col-4 col-form-label">Sector </label> 
                  <div class="col-8">
                    <input  name="Sector" class="form-control here" type="text" value="<?php echo $Sector;?>"readonly>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="CompanyName" class="col-4 col-form-label">Company Name</label> 
                  <div class="col-8">
                    <input  name="CompanyName" class="form-control here" type="text" value="<?php echo $CompanyName;?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="UName" class="col-4 col-form-label">Username</label> 
                  <div class="col-8">
                    <input name="UName" class="form-control here" type="text" readonly  value="<?php echo $UName;?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Director" class="col-4 col-form-label">Company Director Name</label> 
                  <div class="col-8">
                    <input  name="Director" class="form-control here" required type="text" value="<?php echo $Director;?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Address" class="col-4 col-form-label">Company Address</label> 
                  <div class="col-8">
                    <input name="Address" placeholder="Address" class="form-control here" type="text" value="<?php echo $Address;?>">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="License" class="col-4 col-form-label">Company License</label> 
                  <div class="col-8">
                    <input  name="License" placeholder="Company License" class="form-control here" type="text" value="<?php echo $License;?>">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="Email" class="col-4 col-form-label">Company Email</label> 
                  <div class="col-8">
                    <input  name="Email" placeholder="Company Email" class="form-control here" type="text" value="<?php echo $Email;?>">
                  </div>
                </div>


                <div class="form-group row">
                  <label for="Phone" class="col-4 col-form-label">Company Phone No</label> 
                  <div class="col-8">
                    <input  name="Phone" placeholder="Company Phone No" class="form-control here" type="text" value="<?php echo $Phone;?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Pass" class="col-4 col-form-label">Password</label> 
                  <div class="col-8">
                    <input  name="Pass" placeholder="Password" class="form-control here" type="text" value="<?php echo $Pass;?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="CnPass" class="col-4 col-form-label">Confirm Password</label> 
                  <div class="col-8">
                    <input  name="CnPass" placeholder="Password" class="form-control here" type="text" value="<?php echo $CnPass;?>">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-danger">Update Now</button>
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
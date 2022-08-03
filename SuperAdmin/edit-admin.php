<?php include("config.php");
	include('navbar.php');
  error_reporting(0);

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
.signup-page a {
    color: #03A9F4;
}
.signup-page form {
    margin: 30px auto;
    border: 1px solid #e4e4e4;
    width: 900px;
    padding: 10px 25px;
    border-radius: 10px;
    box-shadow: 0 0px 6px rgba(173, 173, 173, 0.5);
}

.signup-page .required-field {
    color: #F44336;
    font-size: 17px;
    margin: 0px 2px;
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

session_start();

    $ID = $_GET['ID'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "e-booking";

    $conn = mysqli_connect($servername,$username,$password,$database);

    $sql = "SELECT * FROM `allsector` WHERE ID=$ID";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $ID = $row['ID'];
    $Name = $row['Name'];
    $Email = $row['Email'];
    $Phone = $row['Phone'];
    $Sector = $row['Sector'];
    $SectorEmail = $row['SectorEmail'];
    $UName = $row['UName'];
    $Pass = $row['Pass'];
    $Address = $row['Address'];

    if(isset($_POST["submit"]))
						{
              $Name = $_POST['Name'];
              $UName = $_POST['UName'];
              $Email = $_POST['Email'];
              $Pass = $_POST['Pass'];
              $Phone = $_POST['Phone'];
              $Sector = $_POST['Sector'];
              $SectorEmail = $_POST['SectorEmail'];
              $Address = $_POST['Address'];

              $sql = "UPDATE allsector SET Name='$Name', UName='$UName', Pass='$Pass', Email='$Email', Phone='$Phone',Sector='$Sector',SectorEmail='$SectorEmail',
              Address='$Address' WHERE ID='$ID' ";
                
                if($con->query($sql) )
                {
                  echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Update.
                  </div>';
                }
                
              }
                 
						
					?>
					
						
					<div class="signup-page">
					<form action="" method="POST">
      		<h3>Update Details</h3>

      <div class="form-group">
          <label><b>Name</b></label>
          <input type="text" class="form-control" name='Name' value="<?php echo $Name;?>" >
      </div> 
      
      <div class="form-group">
          <label><b>Username</b></label>
          <input type="text" class="form-control" name="UName"  value="<?php echo $UName;?>" >
      </div> 

      <div class="form-group">
          <label for="Sector"> <b>Sector</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" name="Sector" value="<?php echo $Sector;?>" readonly>
      </div> 

      <div class="form-group">
          <label for="SectorEmail"> <b>Sector Email</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" name="SectorEmail" value="<?php echo $SectorEmail;?>" readonly>
      </div> 

      <div class="form-group">
          <label for="Email"><b> Email</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Email" name="Email" value="<?php echo $Email;?>" required>
      </div> 

	  <div class="form-group">
          <label for="Phone"><b> Mobile No</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Mobile No" name="Phone" value="<?php echo $Phone;?>" required>
      </div> 
      <div class="form-group">
          <label for="Address"><b> Address</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Address" name="Address" value="<?php echo $Address;?>" required>
      </div>
     
        <div class="form-group">
          <label><b>Password</b></label>
          <input type="text" class="form-control" name='Pass' value="<?php echo $Pass;?>"> 
        </div> 
  
        <div class="form-group">
          <button class="btn btn-primary" id="BTN" name="submit"> Update Now</button>
        <button type="reset" class="btn btn-danger" onclick="history.back()" > Back</button>
        </div>

						 </form>
                    </div>
                </div>
            </div>
            </div>
        
        </div>


	
</body>
</html>
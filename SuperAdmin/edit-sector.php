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
    $Sector = $row['Sector'];
    $SectorEmail = $row['SectorEmail'];

    if(isset($_POST["submit"]))
						{
              $ID = $_POST['ID'];
              $Sector = $_POST['Sector'];
              $SectorEmail = $_POST['SectorEmail'];
              $sql = "UPDATE allsector SET Sector='$Sector', SectorEmail='$SectorEmail' WHERE ID='$ID' ";
                
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
      		<h3>View Details</h3>
					
          <div class="form-group">
          <label><b> ID</b></label>
          <input type="text" class="form-control" name="ID" readonly  value="<?php echo $ID;?>">
      </div> 

      
      <div class="form-group">
          <label><b>Sector Name</b></label>
          <input type="text" class="form-control" name='Sector' value="<?php echo $Sector;?>" >
      </div> 
      
      <div class="form-group">
          <label><b>Sector Email</b></label>
          <input type="text" class="form-control" name="SectorEmail"  value="<?php echo $SectorEmail;?>">
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
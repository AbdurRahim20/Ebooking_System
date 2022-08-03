<?php
include("config.php");
include('admin-header.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	  <link rel="stylesheet" href="assets/css/main.css">
	  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


<style>
   @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  
}
.page h3 {
    margin: 20px 0px 30px;
    padding: 0px 0px 25px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    color: #033c91;
}

.page form {
    margin: 40px 400px;
    padding: 50px;
    border: 1px solid #e4e4e4;
    width: 900px;
    padding: 10px 25px;
    border-radius: 10px;
    box-shadow: 0 0px 6px rgba(173, 173, 173, 0.5);
    background-color: #fff;
}
.page .btn {
    width: 100%;
    margin: 10px 0px;
    font-size: 18px;
    background-color: #033c91;
    border: none;
    border-radius: 6px;
    
}
.page .btn:hover{
    background-color: black;
  color: white;
  
}

.page .required-field {
    color: #F44336;
    font-size: 17px;
    margin: 0px 2px;
}


@media(max-width: 767px){
.page form {
    width: 90%;
}
}
</style>
</head>
<body>


    <div class="page">
    <form action="" method="POST">

    <?php
            $conn = mysqli_connect('localhost','root','','e-booking');
            if(isset($_POST['submit'])){
                
                $Sector = $_POST['Sector'];
                $SectorEmail = $_POST['SectorEmail'];
                $Pass = $_POST['Pass'];
                
                
            $sql = "INSERT INTO allsector(Sector,SectorEmail) VALUES('{$_POST["Sector"]}','{$_POST["SectorEmail"]}')";
                if(mysqli_query($conn, $sql) == TRUE){
                    echo '
                        <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Your has been Successfully Inserted.
                        </div>';
                }else{
                    echo "Not insert";
                }
            }

    ?>
      	<h3>Create New Sector</h3>
          <div class="form-group">
          <label for="name">Sector Name<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Sector Name" name="Sector" required>
      </div> 
	  <div class="form-group">
          <label for="name">Sector Email<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Sector Email" name="SectorEmail" required>
      </div> 

	  <div class="form-group">
							<button class="btn btn-primary" id="BTN" name="submit"></i> Create</button>
						  </div>
						 </form>
                    </div>
                </div>
            </div>
            </div>
        
        </div>


	
</body>
</html>
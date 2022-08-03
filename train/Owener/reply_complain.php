<?php	
//include('navbar.php');
include('config.php');

			if(isset($_GET['ID'])){
			$ID = $_GET['ID'];
			$sql = "SELECT * FROM feedback WHERE ID = $ID";
			$query = mysqli_query($con, $sql);
			while($row = mysqli_fetch_assoc($query)){
				$ID = $row['ID'];
				$Reply = $row['Reply'];
				$ReplyDate = $row['ReplyDate'];

			}
		}
		if(isset($_POST['rply'])){
			
			$Reply = $_POST['Reply'];
			$ReplyDate = $_POST['ReplyDate'];

			$sql1 = "UPDATE feedback SET Reply='$Reply', ReplyDate='$ReplyDate' WHERE ID='$ID' ";
			
			if(mysqli_query($con, $sql1) == TRUE){
				{
					echo '
					<div class="alert alert-success">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Success!</strong> You has been Successfully Sent.
					</div>';
				  }
			
			}else{
				echo  '
				<div class="alert alert-danger">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Failed!</strong> You has not been Sent.Please try again.
				</div>';
			}	
		}

?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>iblling  management system</title>
		<link rel="stylesheet" href="style2.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>		<style>
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
	<div class="signup-page">
	<form action="" method="POST">
      		<h3>Reply</h3>
					
          <div class="form-group">
          <label><b>Reply</b></label>
		  <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="Reply"></textarea>
      </div> 

      <div class="form-group">
          <label><b>Date of Reply</b></label>
          <input type="date" class="form-control DATES"  name="ReplyDate" >
      </div> 

	  <div class="form-group">
        <button class="btn btn-primary" id="BTN" name="rply"> Confim Now</button>
        <button type="reset" class="btn btn-danger" id="BTN2" name="reset" > Cancel</button>
        </div>

	
					</div>
				</div>
		</div>				
	</body>
</html>
				
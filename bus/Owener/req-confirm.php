<?php include("config.php");
      //include("navbar.php");
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
    color: #048D64;
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


    $sql = "SELECT * FROM `tour_regi` WHERE ID=$ID";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

  
    $name =  $row['Name'];
    $uname =  $row['UName'];
    $email =  $row['Email'];
    $number =  $row['Phone'];
    $Amount = $row['Amount'];
    $Bank = $row['Bank'];
    $Tnx = $row['Tnx'];
    $Method = $row['Method'];
    $CDate = $row['CDate'];
    $status = $row['Status'];

						if(isset($_POST["submit"]))
						{
              //$ID = $_POST['ID'];
              $CDate = $_POST['CDate'];
              $Status = $_POST['Status'];


                $sql2="UPDATE allrequest SET CDate='$CDate', Status='$Status' WHERE ID='$ID' "; 
                
                if($con->query($sql2))
                {
                  echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Registraion.
                  </div>';
                }
                
              }
                 
						
					?>
					
						
					<div class="signup-page">
					<form action="" method="POST">

          <h3>Your Information</h3>

          <div class="form-group">
          <label for="name"><b>Your Full Name</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Your Name" readonly value="<?php echo $name;?>"  name="name" required>
      </div> 

        <div class="form-group">
          <label for="email"><b> Email</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Your Email" name="email" readonly value="<?php echo $email;?>"  required>
      </div>

      <div class="form-group">
          <label for="number"><b> Phone No</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Phone Number" name="number" readonly value="<?php echo $number;?>" required>
      </div>

        <div class="form-group">
          <label for="Amount"><b>Amount</b><span class="required-field">*</span></label>
          <input type="text" class="form-control"  name="Amount" readonly value="<?php echo $Amount;?>" required>
        </div>

      <div class="form-group">
          <label for="Method"><b> Payment Method</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" name="Method" readonly value="<?php echo $Method;?>" required>
        </div>

      <div class="form-group">
          <label for="Bank"><b>A/C No OR Mobile No</b><span class="required-field">*</span></label>
          <input type="text" class="form-control"  name="Bank" readonly value="<?php echo $Bank;?>" required>
        </div>

        <div class="form-group">
          <label for="Tnx"><b>Tnx ID</b></label>
          <input type="text" class="form-control"  name="Tnx" readonly value="<?php echo $Tnx;?>">
        </div>

        <h3 class='text-success'>Any Updation</h3>
         
			<div class="form-group">
				<label for="CDate">Completed Date</label>
				<input type="date" name="CDate"  id="CDate" class="form-control DATES" value="<?php echo $CDate;?>">
			</div>
			


			<div class="form-group">
				<label for="Status">Status</label>
				<select name="Status" required  id="Status" class="form-control" value="<?php echo $Status;?>">
					<option value="">Select Status</option>
					<option value="0">Pending</option>
					<option value="1">Confirmed</option>
					<option value="2">Declined</option>
				</select>
			</div>
						  
        <div class="form-group">
        <button class="btn btn-primary" id="BTN" name="submit"> Confim Now</button>
        <button type="reset" class="btn btn-danger" id="BTN2" name="reset" > Cancel</button>
        </div>

						 </form>
                    </div>
                </div>
            </div>
            </div>
        
        </div>


	
</body>
</html>
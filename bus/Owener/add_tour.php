<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>E-booking</title>
		<link rel="stylesheet" href="style2.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>		
	
		<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
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

	<?php
		if (isset($_POST['submit'])){
			$ID = $_POST['ID'];	
			$Name = $_POST['Name'];
			$UName = $_POST['UName'];
			$Place = $_POST['Place'];
			$Date = $_POST['Date'];
			$Last_date = $_POST['Last_date'];
			$Price = $_POST['Price'];
			$Details = $_POST['Details'];

		if (isset($_FILES['Img']['tmp_name'])) {
			$tmp_name = $_FILES['Img']['tmp_name'];
			$target = "images/.";
			$name = $_FILES['Img']['name'];
			move_uploaded_file($tmp_name,"$target/$name");
		}
	
		$images = $name;


		$sql = "INSERT INTO tour(Name,UName,Place,Date,Last_date,Price,Img,Details) VALUES( '$Name','$UName','$Place','$Date','$Last_date','$Price','$images','$Details')";
		$query_run = mysqli_query($con, $sql);
		if($query_run){
			
			echo  '
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> Hall has been Successfully Added.
			</div>';
			
		}else{
			echo "Successfull not added";
		}

		}
    ?>

<div class="signup-page">
<form action="add_tour.php" method="POST" enctype="multipart/form-data">
      	<h3>Make Your Tour Package</h3>
          <div class="panel panel-primary">
                    <div class="panel-heading">
                    </div>
					
						<input type="hidden" class="form-control" name="ID" required>
						<div class="form-group">
                                <label class="control-label text-primary">Bus Name</label>
                                <input type="text" class="form-control" name="Name"  value="<?php echo $_SESSION['CompanyName'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-primary">Username</label>
                                <input type="text" class="form-control" name="UName"value="<?php echo $_SESSION['UName'] ?>" readonly>
                            </div>

						<div class="form-group">
							<label class="control-label text-primary" for="Place" >Tour Place</label>
							<input type="text" placeholder="Tour Place" id="Place" name="Place"  required class="form-control input-sm">
						</div>
						
						
						<div class="form-group">
							<label class="control-label text-primary" for="Date">Date of Tour</label>
							<input type="date"  placeholder="YYYY/MM/DD" required id="Date" name="Date"  class="form-control input-sm DATES">
						</div>

						<div class="form-group">
							<label class="control-label text-primary" for="Last_date">Registration last Date</label>
							<input type="date"  placeholder="YYYY/MM/DD" required id="Last_date" name="Last_date"  class="form-control input-sm DATES">
						</div>
						
					
						<div class="form-group">
							<label class="control-label text-primary" for="Price" >Total Cost</label>
							<input type="text" required placeholder="Cost"  name="Price" id="Price" class="form-control input-sm">
						</div>
						
						  
						  
						   	<div class="form-group">
								<label class="control-label text-primary" for="Details">Description</label>
								<textarea name="Details"></textarea>
							<script>
									CKEDITOR.replace( 'Details' );
							</script>                          
							</div>


							<div class="form-group">
							<label class="control-label text-primary"  >Upload Photo</label>
							<input type="file" class="form-control"  name="Img">
						  </div>
						
						
						  <div class="form-group">
							<button class="btn btn-primary" type="submit" name="submit" >Registar Now</button>
							<button type="reset" class="btn btn-danger" id="BTN2" name="reset" > Cancel</button>
            		</form>
        		</div>	
			</div>
			</div>
		</div>
		</div>
		</div>
	</body>	
</html>

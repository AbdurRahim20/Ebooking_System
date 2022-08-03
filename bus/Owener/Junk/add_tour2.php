<?php 
include("config.php"); 
session_start();


//error_reporting(0);?>
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
<body>


<div class="signup-page">
	<form action="" method="POST">
      	<h3>Make Your Tour Package</h3>

				<?php
					if(isset($_POST["submit"]))
					{
						
										
$target_dir = "images/";
$img="images/noimage.jpg";
$target_file = $target_dir.rand(100,999). basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
      //  echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
   // echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $img=$target_file;
    } else {
     //   echo "Sorry, there was an error uploading your file.";
    }
}

$sql=" INSERT INTO tour (Place,Date,Last_date,Price,Img,Details )
 VALUES ('{$_POST["Place"]}', '{$_POST["Date"]}','{$_POST["Last_date"]}', '{$_POST["Price"]}', '{$img}','{$_POST["Details"]}');";
						if($con->query($sql))
							{
								echo '
								<div class="alert alert-success">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> Thank you for adding you as donor.
								</div>
								';
							}
					}
				?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    </div>
					
                    <div class="panel-body">
						<form method="post" action="tour.php" autocomplete="off" role="form" enctype="multipart/form-data">

						<div class="form-group">
                                <label class="control-label text-primary">Bus Name</label>
                                <input type="text" class="form-control" name="Name"  value=" <?php echo $_SESSION['CompanyName'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-primary">Username</label>
                                <input type="text" class="form-control" name="UName"value=" <?php echo $_SESSION['UName'] ?>" readonly>
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
							<label class="control-label text-primary" for="fileToUpload" >Upload Photo</label>
							<input type="file" class="form-control"  name="fileToUpload">
						  </div>
						
						
						  <div class="form-group">
							<button class="btn btn-primary" type="submit" name="submit" >Registar Now</button>
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
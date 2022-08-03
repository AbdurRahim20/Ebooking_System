<?php 
include("config.php"); 
//include("functions.php"); 

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
</head>
<body>

    <div class="container" style='margin-top:70px;'>
        <div class="row">
            <div class="col-md-12">
                <h3 class=" text-primary">
					<i class='fa fa-users'></i> New Donor Registration
                </h3><hr>

            </div>
        </div>
	
	
			<div class="row centered-form ">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<?php
					if(isset($_POST["submit"]))
					{
						
										
$target_dir = "images/";
$img="";
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
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-user "> </span> JOIN AS BLOOD DONOR</h3>
                    </div>
					
                    <div class="panel-body">
						<form method="post" action="Donor_reg.php" autocomplete="off" role="form" enctype="multipart/form-data">
					

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
							<label class="control-label text-success" for="fileToUpload" >Upload Photo</label>
							<input type="file" class="form-control"  name="fileToUpload">
						  </div>
						
					
						
						  <div class="form-group">
							<button class="btn btn-primary" type="submit" name="submit" >Registar Now</button>
						  </div>
						 </form>
                    </div>
                </div>
            </div>
			 
            
        </div>
        
       
    </div>    
 
</body>
</html>
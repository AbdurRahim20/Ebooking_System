<?php include("config.php");?>
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
    color: #ff0000;
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
input[type="button"]
{
  color: white;
  width: 30%;
  border: 0px solid transparent;
  outline: none;
  cursor: pointer;
}

.signup-page .btn:hover{
  opacity: 0.9;
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
						if(isset($_POST["submit"]))
						{
									/*	
              $target_dir = "image/";
              $img="image/noimage.jpg";
              $target_file = $target_dir.rand(100,999). basename($_FILES["fileToUpload"]["name"]);
              $uploadOk = 1;
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
               Check if image file is a actual image or fake image
              
                  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                  if($check !== false) {
                      echo "";
                      $uploadOk = 1;
                  } else {
                      echo "File is not an image.";
                      $uploadOk = 0;
                  }
              
               Check if file already exists
              if (file_exists($target_file)) {
                  echo "Sorry, file already exists.";
                  $uploadOk = 0;
              }
              // Check file size
              if ($_FILES["fileToUpload"]["size"] > 5000000000) {
                  echo "Sorry, your file is too large.";
                  $uploadOk = 0;
              }
               Allow certain file formats
              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif" ) {
                 /echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  $uploadOk = 0;
              }
               Check if $uploadOk is set to 0 by an error
              if ($uploadOk == 0) {
                  echo "Sorry, your file was not uploaded.";
               if everything is ok, try to upload file
              } else {
                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      $img=$target_file;
                  } else {
                      echo "Sorry, there was an error uploading your file.";
                  }
              }

*/
									
                $sql="INSERT INTO userregi(Name,UName,Email,Phone,District,Address,PostCode,NID,Pass,CnPass)
                VALUES('{$_POST["name"]}','{$_POST["uname"]}','{$_POST["email"]}','{$_POST["number"]}',
                '{$_POST["dist"]}','{$_POST["address"]}','{$_POST["post"]}','{$_POST["nid"]}','{$_POST["pass"]}','{$_POST["Cnpass"]}')"; 
                
                if($con->query($sql))
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
      		<h3>Registration Here</h3>
					
					
          <div class="form-group">
          <label for="name">Your Full Name<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required>
      </div> 

      <div class="form-group">
          <label for="uname">Username<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
        </div> 

        <div class="form-group">
          <label for="email"> Email<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Your Email" name="email" required>
      </div>

      <div class="form-group">
          <label for="number"> Phone No<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Phone Number" name="number" required>
      </div>

        <div class="form-group">
          <label for="dist">District<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Your District" name="dist" required>
        </div>

      <div class="form-group">
          <label for="address"> Address<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Your Full Address" name="address" required>
        </div>

      <div class="form-group">
          <label for="post">Post Code<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Your Post Code" name="post" required>
        </div>

        <div class="form-group">
          <label for="nid">NID/Passport No</label>
          <input type="text" class="form-control" placeholder="Your NID" name="nid">
        </div>
<!--
        <div class="form-group">
          <label for="fileToUpload">Upload Photo</label>
          <input type="file" class="form-control"  name="fileToUpload">
        </div>
-->
        <div class="form-group">
          <label for="pass">Password<span class="required-field">*</span></label>
          <input type="password" class="form-control" placeholder="Enter Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required> 
        </div>   
        <div class="form-group">
          <label for="Cnpass">Confirm Password<span class="required-field">*</span></label>
          <input type="password" class="form-control" placeholder="Repeat Password" name="Cnpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
        </div>
          
						  
        <div class="form-group">
        <button class="btn btn-primary" id="BTN" name="submit"> Registration Now</button>
        <button type="reset" class="btn btn-danger" id="BTN2" name="reset" > Cancel</button>
        </div>

        <div class="signup_link">
         Already Have a Account? <a href="user-login.php">Login Here</a>
        </div>
						 </form>
                    </div>
                </div>
            </div>
            </div>
        
        </div>


	
</body>
</html>
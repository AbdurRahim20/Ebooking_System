<?php include("config.php");
include("navbar.html");
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
    color: #062d8b;
}
.signup-page a {
    color: #03A9F4;
}
.signup-page form {
    margin: 30px auto;
    border: 1px solid #e4e4e4;
    width: 700px;
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
    margin-bottom: 0px;
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
							
									
                $sql="INSERT INTO allowener(Director,UName,CompanyName,Email,Phone,Address,License,Method,Pass,CnPass,Sector)
                VALUES('{$_POST["Director"]}','{$_POST["UName"]}','{$_POST["CompanyName"]}','{$_POST["Email"]}',
                '{$_POST["Phone"]}','{$_POST["Address"]}','{$_POST["License"]}','{$_POST["Method"]}','{$_POST["Pass"]}','{$_POST["CnPass"]}','{$_POST["Sector"]}')"; 
                
                if($con->query($sql))
                {
                  echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Registraion.
                  </div>';
                }
                else{

                  echo '
                  <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Failed!</strong> Your has not been Registraion.Please Try Again.
                  </div>';

                }
              }
                 
						
					?>
					
						
					<div class="signup-page">
					<form action="" method="POST">
      		<h3>Owner Registration Here</h3>
					
					
          <div class="form-group">
          <label for="Director">Company Owener Name<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Your Name" name="Director" required>
      </div> 
      <div class="form-group">
          <label for="CompanyName">Company Name<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Your Name" name="CompanyName" required>
      </div> 

      <div class="form-group">
          <label for="UName">Company Username<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Username" name="UName" required>
        </div> 

        <div class="form-group ">
      <label for="Sector">Type of Company</label>
      <select name="Sector" class="form-control">
        <option selected>Air</option>
        <option >Bus</option>
        <option>Train</option>
        <option>Launch</option>
      </select>
      </div>

        <div class="form-group">
          <label for="Email">Company Email<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Your Email" name="Email" required>
      </div>

      <div class="form-group">
          <label for="Phone">Company Phone No<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Phone Number" name="Phone" required>
      </div>


      <div class="form-group">
          <label for="Address">Company Address<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Your Full Address" name="Address" required>
        </div>
<!--
      <div class="form-group">
          <label for="number">Company Website<span class="required-field">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Company Phone Number" name="web" required>
      </div>
            -->
            <div class="form-group">
          <label for="License">Company License</label>
          <input type="text" class="form-control" placeholder="Enter Company License No" name="License">
      </div>

      <div class="form-group">
          <label for="Method">Your Payment Method & A/C No</label>
          <textarea rows = "5" cols = "50" class="form-control textarea" placeholder="Enter Your all Payment A/C No " name="Method"></textarea>
      </div>


        <div class="form-group">
          <label for="Pass">Password<span class="required-field">*</span></label>
          <input type="password" class="form-control" placeholder="Enter Password" name="Pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required> 
        </div>   
        <div class="form-group">
          <label for="Cnpass">Confirm Password<span class="required-field">*</span></label>
          <input type="password" class="form-control" placeholder="Repeat Password" name="CnPass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
        </div>
          
						  
        <div class="form-group">
        <button class="btn btn-primary" id="BTN" name="submit"> Registration Now</button>
        <button type="reset" class="btn btn-danger" id="BTN2" name="reset" > Cancel</button>
        </div>

        <div class="signup_link">
         Already Have a Account? <a href="login.php">Login Here</a>
        </div>
						 </form>
                    </div>
                </div>
            </div>
            </div>
        
        </div>


	
</body>
</html>
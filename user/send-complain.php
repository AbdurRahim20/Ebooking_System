<?php //error_reporting(0);
include 'navbar.html';
session_start(); 
include("config.php");
?>
<?php

if(isset($_POST["submit"]))
{
      
    $sql="INSERT INTO feedback(Name,Email,Email_C,Subject,Message) VALUES('{$_POST["Name"]}','{$_POST["Email"]}','{$_POST["Email_C"]}','{$_POST["Subject"]}','{$_POST["Message"]}')"; 
    
    if($con->query($sql))
    {
      echo '
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Your has been Successfully Sent Complain.
      </div>';
    }else{
      echo '
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Failed!</strong> You has not be Sent, Please Try Again.
        </div>';}
    
  }

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
    margin: 0px auto;
  
    width: 900px;
    padding: 10px 25px;
 

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
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow-lg ">
                <div class="card-header text-white" style = "background-color: #00854b">
                    <h3><b>Send Any Complain</b> </h3>
                </div>
                <div class="card-body">
            <a href="send-complain.php" class="btn btn-primary">Owener</a>
            <a href="send-complain-sector.php" class="btn btn-info">Sector Admin</a>
            </div>
            

<div class="signup-page">
<form action="" method="POST">
          <div class="form-group">
          <label><b>Name</b></label>
          <input type="text" class="form-control" name="Name" readonly value="<?php echo $_SESSION['Name']; ?>">
      </div>

        <div class="form-group">
          <label for="Email"><b>Your Email</b><span class="required-field">*</span></label>
          <input type="text" class="form-control" name="Email" value="<?php echo $_SESSION['Email']; ?>">
      </div>

	  <div class="form-group">
          <label for="Email_C"><b>Company Email(Which You send your complain)</b><span class="required-field">*</span></label>
          <input type="text" class="form-control"  name="Email_C">
        </div> 

      <div class="form-group">
          <label for="Subject"><b>Subject</b><span class="required-field">*</span></label>
          <input type="text" class="form-control"  name="Subject">
        </div> 
        
		<div class="form-group">
          <label><b>Your complain</b></label>
		  <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="Message"></textarea>
      </div> 

        <div class="form-group">
        <button class="btn btn-primary" id="BTN" name="submit"> Send</button>
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








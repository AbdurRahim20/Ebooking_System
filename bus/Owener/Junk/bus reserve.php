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
							
									
                $sql="INSERT INTO bus_reserve(Journey,Return_date,Type,Start,End,Operator,No_seat,No_bus,Name,Phone,Email,Address)
                VALUES('{$_POST["Journey"]}','{$_POST["Return_date"]}','{$_POST["Type"]}','{$_POST["Start"]}','{$_POST["End"]}',
                '{$_POST["Operator"]}','{$_POST["No_seat"]}','{$_POST["No_bus"]}','{$_POST["Name"]}','{$_POST["Phone"]}','{$_POST["Email"]}','{$_POST["Address"]}')"; 
            
                

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
      		            <h3>Registration Here</h3>
					
					
                          <div class="form-group">
                          <label for="Journey">Date of Journey</label><span class="required-field">*</span>
                              <input type="date" class="form-control"  name="Journey" required>
                          </div>
                        
                          <div class="form-group">
                          <label for="Return_date">Date of Return</label><span class="required-field">*</span>
                              <input type="date" class="form-control"  name="Return_date" required>
                          </div>

                            <div class="form-group">
                            <label for="Type">Bus Type</label>
                            <select name="Type" class="form-control" required>
                                <option >AC</option>
                                <option >Non AC</option>
                                <option >AC Business Class</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label for="Start">Origin City( with Boarding Point )</label>
                                <input type="text" class="form-control"  name="Start" required>
                            </div>

                            <div class="form-group">
                            <label for="End">Destination City ( with Dropping Point )</label>
                                <input type="text" class="form-control"  name="End" required>
                            </div>

                            <div class="form-group">
                            <label for="Operator">Prefered bus operator ( if any )</label>
                                <input type="text" class="form-control" name="Operator" >
                            </div>
                       
                            <div class="form-group">
                            <label for="No_seat"> No. of seats in bus </label>
                            <select name="No_seat"  class="form-control" required>
                                <option >27</option>
                                <option >28</option>
                                <option >34</option>
                                <option >36</option>
                                <option >40</option>
                            </select>                           
                         </div>
            
                            <div class="form-group">
                            <label for="No_bus">No. of buses required</label>
                            <input type="number" class="form-control"  name="No_bus" required>
                            </div>
                    

                    <div class="form-group">
                            <label for="Name">Contact Person Name</label>
                                <input type="text" class="form-control"  name="Name" required>
                            </div>

                            <div class="form-group">
                            <label for="Phone">Mobile No.</label>
                                <input type="text" class="form-control" name="Phone" required >
                            </div>

                            <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" name="Email" required>
                            </div>

                            <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" name="Address" >
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
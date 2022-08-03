<!doctype html>
    <meta charset="utf-8">

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



    
</head>



<style>
.login_form_wrapper {
    width: 100%;
    padding-top: 40px;
    padding-bottom: 100px;
    background-color:#00854b;
    margin:auto;
    
   
}

.login_wrapper {
    padding-bottom: 20px;
    margin-bottom: 100px;
    border-bottom: 1px solid #e4e4e4;
    float: left;
    width: 100%;
    background: #fff;
    padding: 50px;
}

.login_wrapper a.btn {
    color: #fff;
    width: 100%;
    height: 50px;
    padding: 6px 25px;
    line-height: 36px;
    margin-bottom: 20px;
    text-align: left;
    border-radius: 5px;
    background: #4385f5;
    font-size: 16px;
  
}


.login_wrapper a i {
    float: right;
    margin: 0;
    line-height: 35px;
}



.login_wrapper h2 {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #111;
    line-height: 20px;
    text-transform: uppercase;
    text-align: center;
    position: relative;
}

.login_wrapper .formsix-pos, .formsix-e {
    position: relative;
}

.form-group {
    margin-bottom: 25px;
}

.login_wrapper .form-control {
    margin: 10px auto;
    height: 53px;
    padding: 15px 20px;
    font-size: 14px;
    line-height: 24px;
    border: 4px solid #fafafa;
    border-radius: 3px;
    box-shadow: 2px;
    font-family: 'Roboto';
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    background-color: #fafafa;
}

.login_wrapper .form-control:focus {
    color: #999;
    background-color: fafafa;
    border: 1px solid #4285f4 !important;
}



.login_remember_box .forget_password {
    float: right;
    color: #db4c3e;
    line-height: 12px;
    text-decoration: underline;
}

.login_btn_wrapper {
    padding-bottom: 20px;
    margin-bottom: 30px;
    border-bottom: 1px solid #e4e4e4;
}

.login_btn_wrapper a.login_btn {
    text-align: center;
    text-transform: uppercase;
}

.login_message p {
    text-align: center;
    font-size: 16px;
    margin: 0;
}

p {
    color: #999999;
    font-size: 14px;
    line-height: 24px;
}

.login_wrapper a.login_btn:hover {
    background-color: #2c6ad4;
    border-color: #2c6ad4;
}

.login_wrapper a.btn:hover {
    background-color: #2c6ad4;
    border-color: #2c6ad4;
}




 </style>   

<?php
session_start();
$message="";
 if(isset($_POST["submit"])) {
    $UName = $_POST["UName"];
    $Pass = $_POST["Pass"];    
  
  $query = "SELECT * FROM allowener WHERE UName='$UName' AND Pass = '$Pass'";
  $result = mysqli_query($con,$query);
  
  if(mysqli_num_rows($result) > 0) {
     While($row = mysqli_fetch_assoc($result))
     {
        if($row["Sector"] == "Train")
        {
          $_SESSION["Sector"] = $row['Sector'];
          $_SESSION['UName'] = $row["UName"];
          $_SESSION['CompanyName'] = $row["CompanyName"];
          $_SESSION['Email'] = $row["Email"];

          header('Location:train/Owener/dashboard.php');
        }
        elseif($row["Sector"] == "Bus")
        {
          $_SESSION["Sector"] = $row['Sector'];
          $_SESSION['UName'] = $row["UName"];
          $_SESSION['CompanyName'] = $row["CompanyName"];
          $_SESSION['Email'] = $row["Email"];
         
        
          header('Location:bus/Owener/dashboard.php');

        }
        elseif($row["Sector"] == "Internet")
        {
          $_SESSION["Sector"] = $row['Sector'];
          $_SESSION['UName'] = $row["UName"];
          $_SESSION['CompanyType'] = $row["CompanyType"];

          header('Location:net-dashboard.php');

        }
        elseif($row["Sector"] == "Water")
        {
          $_SESSION["Sector"] = $row['Sector'];
          $_SESSION['UName'] = $row["UName"];
          $_SESSION['CompanyType'] = $row["CompanyType"];
          
          
          header('Location:water-dashboard.php');

        }

     }
     
  } 
  else 
  {
    header('Location:owener-login.php');
  }
}

?>

<div class="login_form_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- login_wrapper -->
						<div class="login_wrapper">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">
									<a href="owener-login.php" class="btn text-center"style="background-color:#6e10cc"> Owener</a>
								</div>
								<div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">
									<a href="#" class="btn text-center"style="background-color:#089103"> User  </a>
								</div>
                                <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">
									<a href="#" class="btn  text-center" style="background-color:#00b8cc">  Admin</a>
								</div>
								
							</div>
							<div class="formsix-pos">
								<div class="form-group i-email">
									<input type="email" class="form-control" required="" id="email2" placeholder="Email Address *">
								</div>
							</div>
							<div class="formsix-e">
								<div class="form-group i-password">
									<input type="password" class="form-control" required="" id="password2" placeholder="Password *">
								</div>
							</div>
							
							<div class="login_btn_wrapper">
								<a href="#" class="btn btn-primary login_btn"> Login </a>
							</div>
							<div class="login_message">
								<p>Don&rsquo;t have an account ? <a href="#"> Sign up </a> </p>
							</div>
						</div>
						<!-- /.login_wrapper-->
					</div>
				</div>
			</div>
		</div>
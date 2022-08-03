    
<?php include "config.php";
include "navbar.html";
?>

<?php
session_start();
$message="";
 if(isset($_POST["submit"])) {
    $UName = $_POST["UName"];
    $Pass = $_POST["Pass"];    
  
  $query = "SELECT * FROM allsector WHERE UName='$UName' AND Pass = '$Pass'";
  $result = mysqli_query($con,$query);
  
  if(mysqli_num_rows($result) > 0) {
     While($row = mysqli_fetch_assoc($result))
     {
        if($row["Sector"] == "Train")
        {
          $_SESSION["Sector"] = $row['Sector'];
          $_SESSION["Name"] = $row['Name'];
          $_SESSION['UName'] = $row["UName"];
          $_SESSION['CompanyName'] = $row["CompanyName"];
          $_SESSION['Email'] = $row["Email"];

          header('Location:train/SectorAdmin/dashboard.php');
        }
        elseif($row["Sector"] == "Bus")
        {
          $_SESSION["Sector"] = $row['Sector'];
          $_SESSION["Name"] = $row['Name'];
          $_SESSION['UName'] = $row["UName"];
          $_SESSION['CompanyName'] = $row["CompanyName"];
          $_SESSION['Email'] = $row["Email"];
         
        
          header('Location:bus/SectorAdmin/dashboard.php');

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
    header('Location:login.php');
  }
}

?>
<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  
}
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#42E695, #3BB2B8);
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 500px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
  font-size: 40px;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px ;
  background: #3BB2B8;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #42E695;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}
</style>
  </head>
  <body>
    <div class="center">
      <h1>Section Admin</h1>
      
      <form name="frmUser" method="post" action="" align="center">
      <div class="message"><?php if($message!="") { echo $message; } ?></div>

      <div class="txt_field">
          <input type="text"name="UName" required>
          <label for="UName">Username</label>
          <span></span>
          
        </div>
        <div class="txt_field">
          <input type="password" name="Pass" required>
          <label for="Pass">Password</label>
          <span></span>       
        </div> 

        <input type="submit" onclick="check(this.form)" name="submit" value="Login">
        <div class="signup_link">
        </div>
      </form>
    </div>

      </form>


</body>
</html>
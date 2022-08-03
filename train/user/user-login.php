
<?php include "config.php"?>
<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        
        $result = mysqli_query($con,"SELECT * FROM userregi WHERE UName='" . $_POST["UName"] . "' 
        and Pass = '". $_POST["Pass"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["ID"] = $row['ID'];
            $_SESSION["Name"] = $row['Name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["ID"])) {
    header("Location:user-dashboard.php");
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
  /*background: linear-gradient(120deg,#2980b9, #8e44ad); */
  /*background: linear-gradient(120deg,#fa4747a8, #aa1900);*/
  background:whitesmoke;
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
  border-radius: 15px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid cadetblue;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid cadetblue;
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
  color: cadetblue;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
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
  color: #2691d9;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px ;
  background: rgb(255, 0, 0);
  border-radius: 20px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
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
      <h1>User Login</h1>
      
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

        <input type="submit" onclick="check(this.form)" name="submit" value="Submit">
        <div class="signup_link">
          Not a Member? <a href="registration-user.php">Registration Here</a>
        </div>
      </form>
    </div>

      </form>


</body>
</html>


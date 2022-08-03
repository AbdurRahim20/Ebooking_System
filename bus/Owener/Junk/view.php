<?php
        include("config.php");
        session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBMS</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
   
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');


*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  text-transform: capitalize;
  outline: none; border:none;
  text-decoration: none;
  transition: all .2s linear;
}
*::selection{
  background:var(--orange);
  color:#fff;
}
html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-padding-top: 6rem;
  scroll-behavior: smooth;
}
section{
  padding:2rem 9%;
}
/*Header bar */
.heading{
  text-align: center;
  padding:2.5rem 0
  
}

.heading span{
  font-size: 3.5rem;
  background:rgba(207, 186, 146, 0.2);
  color:rgb(255, 0, 0);
  border-radius: .5rem;
  padding:.2rem 1rem;
  
}
.heading span.space{
  background:none;
}

.btn{
  display: inline-block;
  margin-top: 1rem;
  background:rgb(255, 0, 0);
  color:#fff;
  padding:.8rem 3rem;
  border:.2rem solid rgb(255, 0, 0);
  cursor: pointer;
  font-size: 1.7rem;
}
.btn:hover{
  background:rgba(255, 255, 255, 0.2);
  color:rgb(185, 8, 8);
}


header{
  position: fixed;
  top:0; left: 0; right:0;
  background:#333;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding:2rem 9%;
}

header .logo{
  font-size: 2.5rem;
  font-weight: bolder;
  color:#fff;
  text-transform: uppercase;
}
header .logo span{
  color:rgb(255, 0, 0);
}

header .navbar a{
  color:#fff;
  font-size: 2rem;
  margin:0 .8rem;
}
header .navbar a:hover{
  color:rgb(255, 0, 0);
}

/*Font design animation background*/


.packages .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:2rem;
}
.packages .box-container .box{
  flex:1 1 30rem;
  border-radius: .5rem;
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
}
.packages .box-container .box .content{
  padding:2rem;
}
.packages .box-container .box .content h3{
  font-size:2rem;
  color:rgb(255, 0, 0);
}
.packages .box-container .box .content h3 i{
  color:rgb(255, 0, 0);
}
.packages .box-container .box .content p{
  font-size:1.7rem;
  color:#666;
  padding:1rem 0;
}


.footer{
  background:#333;
}
.footer .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}
.footer .box-container .box{
  padding:1rem 0;
  flex:1 1 25rem;
}
.footer .box-container .box h3{
  font-size: 2.5rem;
  padding:.7rem 0;
  color:#fff;
}
.footer .box-container .box p{
  font-size: 1.5rem;
  padding:.7rem 0;
  color:#eee;
}
.footer .box-container .box a{
  display: block;
  font-size: 1.5rem;
  padding:.7rem 0;
  color:#eee;
}
.footer .box-container .box a:hover{
  color:rgb(245, 25, 25);
  text-decoration: underline;
}
:root{
  --orange:#020202;
}

</style>
<!-- header section starts  -->

<header>

    

    <a href="#" class="logo"><span>E-</span>BOOKING</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="about.php">About</a>
        <a href="Admin/search.php">Search</a>
        <a href="feedback.php">Feedback</a>
        <a href="user/contact.php">contact</a>
        
    </nav>


</header>

<section >


</section>


    

<?php 
            $ID=$_SESSION["ID"];

            $sql = "SELECT ID, Place, Name, Img,Price, Date,Last_date, Details FROM tour   ";
            $result = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));			
            while( $fetch = mysqli_fetch_assoc($result) ) {

?>

<section class="packages" id="packages">



    <div class="box-container">

        <div class="box">
            
            <div class="content">
                <div class="image">
            <img src="<?php echo "images/".$fetch['Img']; ?>" width="1260px" height="600" alt="Image">
            </div>
                <h3> <label>Place: </label> <?php echo $fetch['Place']; ?></a></h3>
                <h3> <label>Bus Name: </label> <?php echo $fetch['Name']; ?></a></h3>
                <h3> <label>Registration Date: </label> <?php echo $fetch['Date']; ?></a></h3>
                <h3> <label>Registration Last Date: </label> <?php echo $fetch['Last_date']; ?></a></h3>
                <h3><label>Cost: </label>  <?php echo $fetch['Price']; ?><label> BDT</label></a></h3>
                <p><?php  echo $fetch ['Details']; ?> </p>
                
                <a href="tour_regi.php" class="btn">registraion Now</a>
            </div>
        </div>

     

    </div>

</section>


<?php } ?>
<!-- contact section ends -->

<!-- brand section  -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>BBMS is a real-time free platform to help blood searchers connect voluntary blood donors around Bangladesh.</p>
        </div>
        <div class="box">
            <h3>About Blood</h3>
            <a href="#">What is Blood?</a>
            <a href="#">What is Blood Donation?</a>
            <a href="#">Who can Blood Donate?</a>
            <a href="#">How often Can I Donate Blood?</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="need/request_blood.php">Blood Request</a>
            <a href="Admin/search.php">Search Blood</a>
            <a href="about.html">About US</a>
            <a href="user/contact.php">Contact</a>
        </div>
  
    </div>


</section>
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
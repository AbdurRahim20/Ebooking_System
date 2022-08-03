<?php
	include('user-header.php');
	
?>

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


</style>	
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title"><b>Welcome <?php echo $_SESSION["Name"]; ?> Dashboard</b></h3>
						</div>
						
						<div class="panel-body">	
						
			<section class="packages" id="packages">
			<h1 class="heading"></h1>

		<div class="box-container">

		<div class="box">
				
				<div class="content">
					<h3> Bus Ticket Reservation</h3>
					<p>In this sector, you can see all companies Internet Package. You can choose any internet service for easily.Pick The Best Plan For You.
					We are dedicated to serving customers. We achieve this not only through our extensive portfolio of internet/data connectivity. </p>
					
					<a href="AllnetPkgUser.php" class="btn">View More...</a>
				</div>
			</div>

			<div class="box">
				
				<div class="content">
					<h3>Train Ticket Reservation</h3>
					<p>In this sector, you can see all companies Electricity Package. You can choose any electricity service for easily.Pick The Best Plan For You.
					We are dedicated to serving customers. We achieve this not only through our extensive portfolio of electricity connectivity.</p>
				
					
					<a href="AllelectricityPkgUser.php" class="btn">View More... </a>
				</div>
			</div>

			<div class="box">
				
				<div class="content">
					<h3>Airline Ticket Reservation </h3>
					<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
					
					<a href="" class="btn">View More...</a>
				</div>
			</div>

			<div class="box">
				
				<div class="content">
					<h3>Launch Ticket Reservation</h3>
					<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
				
					
					<a href="" class="btn">View More... </a>
				</div>
			</div>

			<div class="box">
				
				<div class="content">
					<h3>Hotel Booking </h3>
					<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
					
					<a href="" class="btn">View More...</a>
				</div>
			</div> 

			<div class="box">
				
				<div class="content">
					<h3>Payment Information</h3>
					<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. </p>
					
					<a href="" class="btn">View More...</a>
				</div>
			</div> 
    </div>

</section>
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	

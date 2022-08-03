<?php 
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpzag.com : Demo Create Bootstrap Cards with PHP and MySQL</title>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<div class="container">	
	<h2>Create Bootstrap Cards with PHP and MySQL</h2>
	<div class="row">
		<div class="col-lg-6 col-sm-12">
			<?php
			$sql = "SELECT ID, Place, Name, Img,Price, Date FROM tour";
			$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>

            <div class="card hovercard">
                <div class="cardheader">               
					<div class="avatar">
						<img alt="Image" src="<?php echo "images/".$fetch['Img']; ?>"width="100px">
					</div>
				 </div>
                <div class="card-body info">
                    <div class="title">
                        <a href="#"><?php echo $record['Place']; ?></a>
                    </div>
					<div class="desc"> <a target="_blank" href="<?php echo $record['Name']; ?>"><?php echo $record['Name']; ?></a></div>		
                    <div class="desc"><?php echo $record['Date']; ?></div>      
					<div class="desc"><label>Cost:-</label> <?php  echo $record ['Price']; ?> <label>BDT</label></div>								
                </div>

                <div class="card-footer bottom">
                  
                </div>
            </div>

			<?php } ?>
        </div>
	</div>	


<?php
        include("config.php");
        session_start();
?>
<head>
    <title>e-booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> --> 
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>


</head>

<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<large class="card-title">
					<b>All Tour/Trip</b>
				</large>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="tour">
					<colgroup>
						<col width="10%">
						<col width="10%">
						<col width="10%">
						<col width="10%">
						<col width="10%">
						<col width="10%">
					</colgroup>
					<thead>
						<tr>
							<th class="text-center">Image</th>
              <th class="text-center">Place</th>
							<th class="text-center">Bus Name</th>
							<th class="text-center">Registration Date</th>
							<th class="text-center">Price</th>
							<th class="text-center">Details</th>
						</tr>
					</thead>
					<tbody>

					<?php

						$servername = "localhost";
						$username = "root";
						$password = "";
						$database = "e-booking";
						$conn = mysqli_connect($servername,$username,$password,$database);
						

						$row = $conn->query("SELECT * FROM tour ");

						if ($row->num_rows < 1) echo "No Records Yet";
						$sn = 0;
						while ($fetch = $row->fetch_assoc()) {
							$ID = $fetch['ID'];

						
						?>
						
						 <tr>
						 	
						 	<td><img src="<?php echo "images/".$fetch['Img']; ?>" width="200" height="120" alt="Image"></td>
							<td><b><?php echo $fetch['Place'] ?></td>
							<td><b><?php echo $fetch['Name'] ?></td>
							<td class="text-center"><?php echo date('M d,Y',strtotime($fetch['Last_date'])).' - '.date('M d,Y',strtotime($fetch['Date'])) ?></td>
						 	<td class="text-right"><?php echo number_format($fetch['Price']) ?><label> BDT</label></td>
						 	<td class="text-center">
							<a href="view.php" button type="button" class="btn btn-primary" <?php echo $ID ?>> View More </button></a> 	
              				<a href="tour_regi.php" button type="button" class="btn btn-primary" <?php echo $ID ?>> Registration</button></a> 
						 
						</td>

						 </tr>

						<?php }// endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


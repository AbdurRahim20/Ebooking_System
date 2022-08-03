<?php include 'config.php' ?>
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
					<b>Bus List</b>
				</large>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="bus-list">
					<colgroup>
						<col width="10%">
						<col width="35%">
						<col width="10%">
						<col width="10%">
						<col width="10%">
						<col width="10%">
						<col width="15%">
					</colgroup>
					<thead>
						<tr>
							<th class="text-center">Date</th>
							<th class="text-center">Information</th>
							<th class="text-center">Seats</th>
							<th class="text-center">Dept. Time</th>
							<th class="text-center">Arr. Time</th>
							<th class="text-center">Available</th>
							<th class="text-center">Price</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>

					<?php

						$servername = "localhost";
						$username = "root";
						$password = "";
						$database = "e-booking";
						$conn = mysqli_connect($servername,$username,$password,$database);

						$row = $conn->query("SELECT * FROM bus_schedule ");

						if ($row->num_rows < 1) echo "No Records Yet";
						$sn = 0;
						while ($fetch = $row->fetch_assoc()) {
							$id = $fetch['id'];

						
						?>
						
						 <tr>
						 	
						 	<td><?php echo date('M d,Y',strtotime($fetch['Dept_Date'])) ?></td>
						 	<td>
						 		<div class="row">
						 		<div class="col-md-12">
						 		<p>Bus Name :<b><?php echo $fetch['Name'] ?></b></p>
						 		<p><small>Bus No :<b><?php echo $fetch['BusNo'] ?></small></b></p>
								<p><small>Bus Type :<b><?php echo $fetch['Type'] ?></small></b></p>
						 		<p><small>Route :<b><?php echo $fetch['Start'].' - '.$fetch['End'] ?></small></b></p>
								<p><small>Starting Point :<b><?php echo $fetch['S_Point'] ?></small></b></p>
								<p><small>Ending Point :<b><?php echo $fetch['End_Point'] ?></small></b></p>
						 		</div>
						 		</div>
						 	</td>
							 <td class="text-right"><?php echo $fetch['Seat'] ?></td>
						 	<td class="text-center"><?php echo date('h:i A',strtotime($fetch['Dept_Time'])) ?></td>
							<td class="text-center"><?php echo date(' h:i A',strtotime($fetch['Arr_Time'])) ?></td>
						 	<td class="text-right"><?php echo $fetch['Seat'] - $booked ?></td>
						 	<td class="text-right"><?php echo number_format($fetch['Price']) ?></td>
						 	<td class="text-center">
							<a href="order.php" button type="button" class="btn btn-primary" <?php echo $id ?>> View Seat </button></a> 	
						 	<!--<button class="btn btn-primary " type="button" data-id="<?php echo $fetch['id'] ?>"></button>
						 	<button class="btn btn-danger" type="button" data-id="<?php echo $fetch['id'] ?>"><i class="fa fa-trash"></i></button>
						--> 	
						</td>

						 </tr>

						<?php }// endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

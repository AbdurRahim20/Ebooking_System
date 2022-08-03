<?php 
include "config.php";
session_start();
include 'admin-header.php';
	
?>
<!doctype html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    
</head>

<body>

<style>
      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');

*{
    font-family: "Poppins", sans-serif;
}

</style>
<div class="main">
<div class="container-fluid">
<div class="panel panel-headline">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header text-white" style = "background-color: #012e70">
                    <h4><b>ALL SECTOR LIST</b> </h4>
                </div>
                
            </div>
        </div>

        <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class = "text-white" style = "background-color: #2b3647" >
                    <tr>
                    <th>S.N </th>
                    <th>Sector</th>
                    <th>Sector Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "e-booking";

$conn = mysqli_connect($servername,$username,$password,$database);
$sql= "select *from allsector group by Sector having count(*) >= 1 ";

//$sql = "select * from `allsector`";
$result = mysqli_query($conn,$sql);
$sn = 0;

while($row=mysqli_fetch_assoc($result))
{
    $ID = $row['ID'];
    echo '<tr>';
    echo '<td>'. ++$sn. '</td>';
    //echo '<td>'.$row['ID'].'</td>';
    echo '<td>'.$row['Sector'].'</td>';
    echo '<td>'.$row['SectorEmail'].'</td>';

    echo"<td><a href = 'edit-sector.php?ID=$ID'<button type='button' class='btn btn-primary'>Edit</button></td>";
    echo"<td><a href = 'Allsector.php?deleteid=$ID'<button type='button' class='btn btn-danger'>Delete</button></td>";


    echo'</tr>';
}


		if(isset($_GET['deleteid'])){
			$deleteid = $_GET['deleteid'];
			$sql = "DELETE FROM allsector WHERE ID = $deleteid";
			if(mysqli_query($conn, $sql) == TRUE){
                echo '
                <div class="alert alert-success">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Your has been Successfully Delete.
                </div>';
                header("Location:Allsector.php");
			}
		}



?>

        </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>


    

</body>
</html>
<?php 
include "config.php";
session_start();
include('admin-header.php');
	
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
                <div class="card-header text-white" style = "background-color: #7604b0" >
                    <h4><b>ALL Company LIST</b> </h4>
                </div>
                
            </div>
        </div>

        <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class = "text-white bg-dark" >
                    <tr>
                    <th>ID </th>
                    <th>Company Name</th>
                    <th>Director</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>CompanyType</th>
                    <th>Pass</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "e-booking";

$conn = mysqli_connect($servername,$username,$password,$database);
$sql = "select * from `allowener`";
$result = mysqli_query($conn,$sql);


while($row=mysqli_fetch_assoc($result))
{
    $id = $row['id'];
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['CompanyName'].'</td>';
    echo '<td>'.$row['Director'].'</td>';
    echo '<td>'.$row['UName'].'</td>';
    echo '<td>'.$row['Email'].'</td>';
    echo '<td>'.$row['Phone'].'</td>';
    echo '<td>'.$row['Sector'].'</td>';
    echo '<td>'.$row['Pass'].'</td>';

   // echo"<td><a href = 'edit-company.php?id=$id'<button type='button' class='btn btn-primary'>Edit</button></td>";
    //echo"<td><a href = 'Allcompany.php?deleteid=$id'<button type='button' class='btn btn-danger'>Delete</button></td>";


    echo'</tr>';
}


		if(isset($_GET['deleteid'])){
			$deleteid = $_GET['deleteid'];
			$sql = "DELETE FROM registration WHERE id = $deleteid";
			if(mysqli_query($conn, $sql) == TRUE){
                echo '
                <div class="alert alert-success">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Your has been Successfully Delete.
                </div>';
                header("Location:Allcompany.php");
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
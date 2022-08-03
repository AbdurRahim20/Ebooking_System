<?php session_start();
	include('user-header.php');
	
?>
<!doctype html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">

    
</head>

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
                <div class="card-header bg-primary">
                    <h4><b>ALL COMPLAIN</b> </h4>
                </div>
                     
            <div class="card-body">
            <a href="send-complain.php" class="btn btn-dark text-white">Send Complain</a>
            </div>
            </div>
            
         
        </div>

        <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class = "text-white bg-success">
                    <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Company Email/Sector</th>
                    <th>Subject</th>
                    <th>Complain</th>
                    <th>Complain Reply</th>
                    <th>Reply Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "e-booking";
$Email=$_SESSION["Email"];

$conn = mysqli_connect($servername,$username,$password,$database);
$sql = "select * from `feedback` where Email = '$Email'  ";
$result = mysqli_query($conn,$sql);
$sn=0;

while($row=mysqli_fetch_assoc($result))
{
    $ID = $row['ID'];
    echo '<tr>';
    echo '<td>'.++$sn.'</td>';
    echo '<td>'.$row['Name'].'</td>';
    echo '<td>'.$row['Email_C'].$row['Sector'].'</td>';
    echo '<td>'.$row['Subject'].'</td>';
    echo '<td>'.$row['Message'].'</td>';
    echo '<td>'.$row['Reply'].'</td>';
    echo '<td>'.$row['ReplyDate'].'</td>';



    echo'</tr>';
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
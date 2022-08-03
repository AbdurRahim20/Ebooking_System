<?php
	include('header.php');
	session_start();
?>

<!doctype html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/css/main.css">

    <title>ALL  Request</title>
    
</head>


<body>

<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

*{
    font-family: "Poppins", sans-serif;
}

</style>
<div class="main">
<div class="container-fluid">
    <div class="panel panel-headline">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card mt-4">
                <div class="card-header bg-primary">
                    <h4><b>ALL <?php echo $_SESSION["UName"]; ?> NEW REQUEST</b> </h4>
                </div>
                <div class="card-header">
                    <div class='float-right-right'>
                     <a href="tour.php" class="btn btn-dark text-white">All Package</a>
                     <a href="tour_confirm.php" class="btn btn-success text-white">All Tour Register</a>
            </div>
            </div>
            </div>
        </div>

        <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body ">
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                    <tr>
                    <th>S.N</th>
                    <th>PKG ID </th>
                    <th>Cust. Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Person</th>
                    <th>Amount</th>
                    <th>Method</th>
                    <th>A/C No</th>
                    <th>Tnx ID</th>
                    <th>Confirmation</th>
                    <th>Status</th>
                    <th>View & Confirm</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "e-booking";
                    $UName=$_SESSION["UName"];

                    $conn = mysqli_connect($servername,$username,$password,$database);
                    $sql = "select * from `tour_regi` where UName = '$UName'";
                    $result = mysqli_query($conn,$sql);
                    $sn = 0;

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $ID = $row['ID'];
                        echo '<tr>';
                        echo '<td>'.++$sn.'</td>';
                        echo '<td>'.$row['Pkg'].'</td>';
                        echo '<td>'.$row['Name'].'</td>';
                        echo '<td>'.$row['Email'].'</td>';
                        echo '<td>'.$row['Phone'].'</td>';
                        echo '<td>'.$row['Person'].'</td>';
                        echo '<td>'.$row['Amount'].'</td>';
                        echo '<td>'.$row['Method'].'</td>';
                        echo '<td>'.$row['Bank'].'</td>';
                        echo '<td>'.$row['Tnx'].'</td>';

                        echo '<td>'.$row['CDate'].'</td>';
                        if($row["Status"]==0)
                            {
                            
                            echo "<td><a href='#' class='btn btn-danger btn-xs'><i class='fa fa-bed'></i> Pending</a></td>";
                            
                            }
                            else if($row["Status"]==1)
                            {
                                
                            echo "<td><a href='#' class='btn btn-success btn-xs'><i class='fa fa-bed'></i> Confirmed</a></td>";
                            
                            }
                            else if($row["Status"]==2)
                            {
                                
                            echo "<td><a href='#' class='btn btn-warning btn-xs'><i class='fa fa-bed'></i> Declined</a></td>";
                            
                            }
   

                        echo"<td><a href = 'req-confirm.php?ID=$ID'<button type='button' class='btn btn-primary'>Click Here</button></td>";


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
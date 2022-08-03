
<?php session_start();
	include('header.php');
	
?>
<!doctype html>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <title>ALL USERS</title>
    
</head>
<body>


<div class="main">
<div class="container-fluid">
<div class="panel panel-headline">
                    
    <div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header bg-primary">
                    <h4><b>ALL <?php echo $_SESSION["UName"]; ?> USER LIST</b> </h4>
                </div>
                
            </div>
        </div>

        <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                    <tr>
                    <th>UID</th>
                    <th>PKG ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Address</th> 
                    <th>Delete</th>       
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
                $sql = "select * from tour_regi where UName = '$UName' ";
                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));


                while($row=mysqli_fetch_assoc($result))
                {
                    $ID = $row['ID'];
                    echo '<tr>';
                    echo '<td>'.$row['ID'].'</td>';
                    echo '<td>'.$row['Pkg'].'</td>';
                    echo '<td>'.$row['Name'].'</td>';
                    echo '<td>'.$row['Email'].'</td>';
                    echo '<td>'.$row['Phone'].'</td>';
                    echo '<td>'.$row['Address'].'</td>';

                   //echo"<td><a href = 'calculate-elec.php?ID=$ID'<button type='button' class='btn btn-primary'>Click Here</button></td>";
                   echo"<td><a href = 'ID=$ID'<button type='button' class='btn btn-danger'>Delete</button></td>";


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




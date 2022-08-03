
<?php session_start();?>
<?php
	include('admin-header.php');
	
?>
<!doctype html>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <title>ALL USER</title>
    
</head>
<body>


<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

*{
  font-family: 'Nunito', sans-serif;
}

</style>

<div class="main">
<div class="container-fluid">
<div class="panel panel-headline">
                    
    <div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header text-white" style = "background-color: #b83956">
                    <h4><b>ALL  USER LIST</b> </h4>
                </div>
                
            </div>
        </div>

        <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                    <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>District</th>
                    <th>Address</th>
                    <th>PostCode</th>
                    <th>NID</th>           
                    </tr>
                </thead>
                <tbody>
                    
            <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "e-booking";


                $conn = mysqli_connect($servername,$username,$password,$database);
                $sql = "select * from userregi";
                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));


                while($row=mysqli_fetch_assoc($result))
                {
                   
                    echo '<tr>';
                    echo '<td>'.$row['ID'].'</td>';
                    echo '<td>'.$row['Name'].'</td>';
                    echo '<td>'.$row['UName'].'</td>';
                    echo '<td>'.$row['Email'].'</td>';
                    echo '<td>'.$row['Phone'].'</td>';
                    echo '<td>'.$row['District'].'</td>';
                    echo '<td>'.$row['Address'].'</td>';
                    echo '<td>'.$row['PostCode'].'</td>';
                    echo '<td>'.$row['NID'].'</td>';
                    

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




<?php session_start();
include 'header.php';
?>

<?php
	//include('elec-header.php');
	
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


<div class="main">
				<div class="container-fluid">
					<div class="panel panel-headline">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header bg-primary">
                    <h4><b>ALL BUS OWENER LIST</b> </h4>
                </div>
                
            </div>
        </div>

        <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class = "text-white bg-success">
                    <tr>
                    <th>S.N </th>
                    <th>UID</th>
                    <th>Director Name</th>
                    <th>Company Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Company Address</th>
                    <th>License</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "e-booking";
$Sector=$_SESSION["Sector"];

$con = mysqli_connect($servername,$username,$password,$database);
$sql = "select * from `allowener` where Sector = '$Sector'";
$result = mysqli_query($con,$sql);

$sn = 0;
while($fetch=mysqli_fetch_assoc($result))
{
     
    $id = $fetch['id'];

 ?><tr>
 <td><?php echo ++$sn; ?></td>
 <td><?php echo $fetch['id']; ?></td>
 <td><?php echo $fetch['Director']; ?></td>
 <td><?php echo $fetch['CompanyName']; ?></td>
 <td><?php echo $fetch['UName']; ?></td>
 <td><?php echo $fetch['Email']; ?></td>
 <td><?php echo $fetch['Phone']; ?></td>
 <td><?php echo $fetch['Address']; ?></td>
 <td><?php echo $fetch['License']; ?></td>

 
 <td>
 <form method="POST">
     <input type="hidden" class="form-control" name="del_bus" value="<?php echo $id ?>" required id="">
     <button type="submit" onclick="return confirm('Are you sure delete this?')" class="btn btn-danger">  Delete </button>
 </form>
 </td>
</tr>  

<?php
}
if (isset($_POST['del_bus'])) {

    $sql = "DELETE FROM `allowener` WHERE id=$id";
    
    $delete = mysqli_query($con,$sql);
    if($delete){

        header("Location:allowener.php");
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
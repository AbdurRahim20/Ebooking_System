<?php
if (isset($_GET['Status'], $_GET['ID'])) {
    $ID = $_GET['ID'];
    $Status = $_GET['Status'];
    if ($Status == 0) {
        $Status = 0;
    } else {
        $Status = 1;
    }
    $sql = ("UPDATE userregi SET Status = '$Status' WHERE ID = '$ID'");
    echo "<script>alert('Action completed!');window.location='users.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> --> 


</head>
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-success">
                <div class="card-header">
                <h3 class="card-title">Registered Users</h3>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">

                        <table style="width: 100%;" style="align-items: stretch;"
                            class="table table-hover table-bordered">

                            <thead>
                                <tr>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>District</th>
                                    <th>Address</th>
                                    <th>PostCode</th>
                                    <th>NID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "e-booking";
                                
                                
                                $conn = mysqli_connect($servername,$username,$password,$database);
                                $sql = "select * from `userregi` ";
                                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));;
                                if ($result->num_rows < 1) echo "No Records Yet";

                                $sn = 0;
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
                                    ?>
                                    <td>
                                        <?php
                                            if ($row['Status'] == 0) {
                                            ?>
                                        
                                            <button  onclick="return confirm('You are about allowing this user be able to login his/her account.')"
                                                type="submit" class="btn btn-success">Enable Account</button></a>
                                        <?php } 
                                        else { ?>
                                        
                                            <button
                                                onclick="return confirm('You are about denying this user access to  his/her account.')"
                                                type="submit" class="btn btn-danger">Disable Account</button></a>
                                        <?php } ?>
                                    </td>
                                    <?php 
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
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</body>
</html>
                                    
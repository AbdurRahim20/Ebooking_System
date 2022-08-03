<?php include("config.php");
 include('header.php');

        session_start();
?>
<head>
    <title>e-booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> --> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>

	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

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
                    <h4><b>ALL Tour Package</b> </h4>
                </div>
                <div class="card-header">
                    <div class='float-right-right'>
                     <a href="add_tour.php" class="btn btn-dark text-white">Make New Package</a>
                     <a href="tour_confirm.php" class="btn btn-success text-white">All Tour Register</a>
            </div>
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
                        <th>Image</th>
                        <th>Tour Place</th>
                        <th>Tour Date</th>
                        <th>Registraion Date</th>
                        <th>Cost</th>
                        <th>Description</th>
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
            $UName=$_SESSION["UName"];

            $row = $conn->query("SELECT * FROM tour WHERE UName='$UName' ");
            
            if ($row->num_rows < 1) echo "No Records Yet";
            
            $sn = 0;
            while ($fetch = $row->fetch_assoc()) {
                $ID = $fetch['ID'];
                
        ?>

        <tr>
            <td><?php echo ++$sn; ?></td>
            
            <td><img src="<?php echo "images/".$fetch['Img']; ?>" width="100px" alt="Image"></td>
            <td><?php echo $fetch['Place']; ?></td>
            <td><?php echo $fetch['Date']; ?></td>
            <td><?php echo $fetch['Last_date']; ?></td>
            <td><?php echo $fetch['Price']; ?></td>
            <!--<td> <?//php  echo"<a href = 'view.php?ID=$ID'<button type='button' class='btn btn-success'>View</button>" ?></td>-->
            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#bd-example-modal-lg<?php echo $ID ?>">View</button></td>
           
            <td>
            <form method="POST">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $ID ?>"> Edit </button>
                <input type="hidden" class="form-control" name="del_bus" value="<?php echo $ID ?>" required id="">
                <button type="submit" onclick="return confirm('Are you sure delete this?')" class="btn btn-danger">  Delete </button>
            </form>
            </td>
        </tr>

        <!-------------- View ---------------->
        <div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg<?php echo $ID ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenter">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php echo $fetch['Details'] ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>


        <!-------------- Edit -------------------->
        <div class="modal" id="edit<?php echo $ID ?>">
        
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-center"> 
                    <h4 class="modal-title"><b>Update Information</b> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input type="hidden" class="form-control" name="ID" value="<?php echo $ID ?>" required id="">
                

                            <div class="form-group">
                                <label>Bus Name</label>
                                <input type="text" class="form-control" name="Name" value="<?php echo $fetch['Name'] ?>" required id="">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="UName" value="<?php echo $fetch['UName'] ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Tour Place</label>
                                <input type="text" class="form-control" name="Place" value="<?php echo $fetch['Place'] ?>" required id="">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="Date" value="<?php echo $fetch['Date'] ?>" required id="">
                            </div>

                            <div class="form-group">
                                <label>Registrtion Last Date</label>
                                <input type="date" class="form-control" name="Last_date" value="<?php echo $fetch['Last_date'] ?>" required id="">
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                            	<textarea name="Details" id="Details" class="form-control" value="<?php echo($fetch["Details"]); ?>"></textarea>
							<script>
                                    CKEDITOR.replace('Details' );
                            </script>
                            </div>

                            <div class="form-group">
                                <label>Total Cost</label>
                                <input type="number" min='0'class="form-control" name="Price" value="<?php echo $fetch['Price'] ?>" required id="">
                            </div>
                            
                            <div class="form-group">
                            <button class="btn btn-primary" type="submit" name='edit'> Edit Package Info</button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal" > Close</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <?php
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
</section>
</div>



<?php

////////////////////////// Edit tour /////////////////////////////
if (isset($_POST['edit'])) {
    $Name = $_POST['Name'];
    $UName = $_POST['UName'];
    $Place = $_POST['Place'];
    $Date = $_POST['Date'];
    $Last_date = $_POST['Last_date'];
    $Details = $_POST['Details'];
    $Price = $_POST['Price'];

            $sql="UPDATE tour SET ID='$ID',Name='$Name',UName='$UName', Place='$Place', Date='$Date', Last_date='$Last_date', 
            Details='$Details', Price='$Price' WHERE ID='$ID' "; 
                
                if($con->query($sql))
                {
                  echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Update.
                  </div>';
                }
                
              }

///////////////////////// DELETE ////////////////////////////////////

if (isset($_POST['del_bus'])) {

    $sql = "DELETE FROM `tour` WHERE ID=$ID";
    
    $delete = mysqli_query($con,$sql);
    if($delete){

        header("Location:tour.php");
    }


}

?>


<?php include("config.php");
        session_start();
        include('header.php');

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


</head>

<div class="main">
    
<div class="container-fluid">
<div class="panel panel-headline">
        
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header bg-primary text-center">
                    <h4><b>ALL BUS LIST</b> </h4>
                </div>
                <div class="card-header">
                    <div class='float-right-right'>
                     <button type="button" class="btn btn-primary"  data-toggle="modal"data-target="#add">Add New Bus</button></div>
            </div>
            </div>
        </div>
        
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 md-6">
            <div class="card">
            <div class="card-body">

            <table id="example1" style="align-items: stretch;" class="table table-hover w-100 table-bordered ">
            <thead class="bg-success text-white">
                <tr>
                    <th>S.N</th>
                    <th>Bus No</th>
                    <th>Bus Name</th>
                    <th>Type</th>
                    <th>Total Seat</th>
                    <th>Start</th>
                    <th>Bording Point</th>
                    <th>End </th>
                    <th>Dropping Point</th>
                    <th>Fare(Tk.)</th>
                    <th>Update & Delete</th>
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

            $row = $conn->query("SELECT * FROM bus WHERE UName='$UName' ");
            
            if ($row->num_rows < 1) echo "No Records Yet";
            
            $sn = 0;
            while ($fetch = $row->fetch_assoc()) {
                $id = $fetch['id'];
            ?>

        <tr>
            <td><?php echo ++$sn; ?></td>
            <td><?php echo $fetch['BusNo']; ?></td>
            <td><?php echo $fetch['Name']; ?></td>
            <td><?php echo $fetch['Type']; ?></td>
            <td><?php echo $fetch['Seat']; ?></td>
            <td><?php echo $fetch['Start']; ?></td>
            <td><?php echo $fetch['S_Point']; ?></td>
            <td><?php echo $fetch['End']; ?></td>
            <td><?php echo $fetch['End_Point']; ?></td>
            <td><?php echo $fetch['Price']; ?></td>
            
            <td>
            <form method="POST">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $id ?>"> Edit </button> 
                <input type="hidden" class="form-control" name="del_bus" value="<?php echo $id ?>" required id="">
                <button type="submit" onclick="return confirm('Are you sure delete this?')" class="btn btn-danger">  Delete </button>
            </form>
            </td>
        </tr>

        <!-------------- Edit -------------------->
        <div class="modal" id="edit<?php echo $id ?>">
        
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-center"> 
                    <h4 class="modal-title"><b>Update Information</b> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" required id="">
                
                            <div class="form-group">
                                <label>Bus No</label>
                                <input type="text" class="form-control" name="BusNo" value="<?php echo $fetch['BusNo'] ?>" required id="">
                            </div>

                            <div class="form-group">
                                <label>Bus Name</label>
                                <input type="text" class="form-control" name="Name" value="<?php echo $fetch['Name'] ?>" required id="">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="UName" value="<?php echo $fetch['UName'] ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Bus Type</label>
                                <input type="text" class="form-control" name="Type" value="<?php echo $fetch['Type'] ?>" required id="">
                            </div>
                            <div class="form-group">
                                <label>Total Seat</label>
                                <input type="text" class="form-control" name="Seat" value="<?php echo $fetch['Seat'] ?>" required id="">
                            </div>

                            <div class="form-group">
                                <label>Start</label>
                                <input type="text" class="form-control" name="Start" value="<?php echo $fetch['Start'] ?>" required id="">
                            </div>
                            <div class="form-group">
                                <label>Boarding Point</label>
                                <input type="text" class="form-control" name="S_Point" value="<?php echo $fetch['S_Point'] ?>" required id="">
                            </div>

                            <div class="form-group">
                                <label>End</label>
                                <input type="text" class="form-control" name="End" value="<?php echo $fetch['End'] ?>" required id="">
                            </div>
                            
                            <div class="form-group">
                                <label>Dropping Point</label>
                                <input type="text" class="form-control" name="End_Point" value="<?php echo $fetch['End_Point'] ?>" required id="">
                            </div>

                            <div class="form-group">
                                <label>Fare</label>
                                <input type="number" min='0'class="form-control" name="Price" value="<?php echo $fetch['Price'] ?>" required id="">
                            </div>
                            
                            <div class="form-group">
                            <button class="btn btn-primary" type="submit" name='edit'> Edit Bus Info</button>
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

<!------------------------ ADD NEW BUS---------------->

<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" align="center">
            <div class="modal-header bg-primary">
                <h3 class="modal-title"><b>Add New Bus</b></h3>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <div class="modal-body">
            <form action="" method="post">
                <table class="table ">
                <tr>
                        <th>Bus Name</th>
                        <td><input type="text" class="form-control" name="Name"  value=" <?php echo $_SESSION['CompanyName'] ?>" readonly></td>
                </tr>
                <tr>
                        <th>Username</th>
                        <td><input type="text" class="form-control" name="UName"value=" <?php echo $_SESSION['UName'] ?>" readonly></td>
                </tr>

                    <tr>
                        <th>Bus No</th>
                        <td><input type="text" class="form-control" name="BusNo" required id=""></td>
                    </tr>
               
                    <tr>
                        <th>Bus Type</th><td>
                        <select name="Type" class="form-control">
                        <option selected>AC</option>
                        <option >NON AC</option>
                        <option>Business Class</option>
                        </select>                        
                </td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Total Seat</th>
                        <td><input type="number" min='0' class="form-control" name="Seat" required id="">
                        </td>
                    </tr>
                    <tr>                        
                        <th>Start</th>
                        <td><input type="text"  class="form-control" name="Start" required id="">
                        </td>
                    </tr>
                    
                    <tr>                        
                        <th>boarding Point</th>
                        <td><input type="text"  class="form-control" name="S_Point" required id="">
                        </td>
                    </tr>
                    <tr>
                        <th>End</th>
                        <td><input type="text" class="form-control" name="End" required id="">
                        </td>
                    </tr>
                    <tr>                        
                        <th>Dropping Point</th>
                        <td><input type="text"  class="form-control" name="End_Point" required id="">
                        </td>
                    </tr>
                    <tr>
                        <th>Fare</th>
                        <td><input type="number" min='0' class="form-control" name="Price" required id="">
                        </td>
                    </tr>
                </table>
                <input class="btn btn-danger" type="submit" value="Add Bus" name='submit'>                   
            </form>
            </div>
        </div>
    </div>
</div>

<?php
////////////// ADD TRAIN ///////////////////

if (isset($_POST['submit'])) {
    
    $sql="INSERT INTO bus(Name,BusNo,UName,Type,Seat,Start,End,Price,S_Point,End_Point)
    VALUES('{$_POST["Name"]}','{$_POST["BusNo"]}','{$_POST["UName"]}','{$_POST["Type"]}','{$_POST["Seat"]}','{$_POST["Start"]}',
    '{$_POST["End"]}','{$_POST["Price"]}','{$_POST["S_Point"]}','{$_POST["End_Point"]}')"; 

    $sql1="INSERT INTO bus_schedule(Name,BusNo,UName,Type,Seat,Start,End,Price,S_Point,End_Point)
    VALUES('{$_POST["Name"]}','{$_POST["BusNo"]}','{$_POST["UName"]}','{$_POST["Type"]}','{$_POST["Seat"]}','{$_POST["Start"]}',
    '{$_POST["End"]}','{$_POST["Price"]}','{$_POST["S_Point"]}','{$_POST["End_Point"]}')";
    
    if($con->query($sql))
    {
        echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Registraion.
                  </div>';
        
    }
    if($con->query($sql1))
    {
        echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Registraion.
                  </div>';
        
    }

}



////////////////////////// Edit Train /////////////////////////////
if (isset($_POST['edit'])) {
    $Name = $_POST['Name'];
    $BusNo = $_POST['BusNo'];
    $Type = $_POST['Type'];
    $Seat = $_POST['Seat'];
    $Start = $_POST['Start'];
    $S_Point = $_POST['S_Point'];
    $End = $_POST['End'];
    $End_Point = $_POST['End_Point'];
    $Price = $_POST['Price'];



            $sql="UPDATE bus SET id='$id',Name='$Name',BusNo='$BusNo', Type='$Type', Seat='$Seat', Start='$Start', 
            S_Point='$S_Point', End='$End',End_Point='$End_Point', Price='$Price' WHERE id='$id' "; 
                
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

    $sql = "DELETE FROM `bus` WHERE id=$id";
    
    $delete = mysqli_query($con,$sql);
    if($delete){

        header("Location:bus.php");
    }


}
?>
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


</head>
<div class="main">

<div class="container-fluid">
<div class="panel panel-headline">
        
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header text-center text-white" style="background-color:#47a370">
                    <h4><b>ALL TRAIN SCHEDULE</b> </h4>
                </div>
                <div class="card-header">
                    <div class='float-right-right'>
                     <button type="button" class="btn btn-dark text-white"  data-toggle="modal"data-target="#add">Add New Schedule</button></div>
            </div>
            </div>
        </div>
        
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 md-6">
            <div class="card">
            <div class="card-body">

            <table id="example1" style="align-items: stretch;" class="table table-hover w-100 table-bordered ">
            <thead class=" text-white"style="background-color:#4c603f">
                <tr>
                    <th>S.N</th>
                    <th>Train No</th>
                    <th>Train Name</th>
                    <th>Total Seat</th>
                    <th>Start</th>
                    <th>Dept. Date</th>
                    <th>Dept. Time</th>
                    <th>End </th>
                    <th>Arr. Time</th>
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

            $row = $conn->query("SELECT * FROM train_schedule WHERE UName='$UName' ");
            
            if ($row->num_rows < 1) echo "No Records Yet";
            
            $sn = 0;
            while ($fetch = $row->fetch_assoc()) {
                $id = $fetch['id'];
            ?>

        <tr>
            <td><?php echo ++$sn; ?></td>
            <td><?php echo $fetch['TrainNo']; ?></td>
            <td><?php echo $fetch['Name']; ?></td>
            <td><?php echo $fetch['Seat']; ?></td>
            <td><?php echo $fetch['Start']; ?></td>
            <td><?php echo $fetch['Dept_Date']; ?></td>
            <td><?php echo $fetch['Dept_Time']; ?></td>
            <td><?php echo $fetch['End']; ?></td>            
            <td><?php echo $fetch['Arr_Time']; ?></td>
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
                <div class="modal-header text-white text-center"style="background-color:#4f43e4" > 
                    <h3 class="modal-title"><b>Update Information</b> </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>
                    </button>
                </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" required id="">
                
                            <div class="form-group">
                                <label>Train No</label>
                                <input type="text" class="form-control" name="TrainNo" value="<?php echo $fetch['TrainNo'] ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Train Name</label>
                                <input type="text" class="form-control" name="Name" value="<?php echo $fetch['Name'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="UName" value="<?php echo $fetch['UName'] ?>" readonly>
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
                                <label>End</label>
                                <input type="text" class="form-control" name="End" value="<?php echo $fetch['End'] ?>" required id="">
                            </div>
                            

                            <div class="form-group">
                                <label>Fare</label>
                                <input type="number" min='0'class="form-control" name="Price" value="<?php echo $fetch['Price'] ?>" required id="">
                            </div>
                            
                            <div class="form-group">
                                <label>Dept. Date</label>
                                <input type="date" class="form-control" name="Dept_Date" value="<?php echo $fetch['Dept_Date'] ?>" >
                            </div>
                            <div class="form-group">
                                <label>Dep. Time</label>
                                <input type="time" class="form-control" name="Dept_Time" value="<?php echo $fetch['Dept_Time'] ?>" >
                            </div>

                            <div class="form-group">
                                <label>Arr. Time</label>
                                <input type="time" class="form-control"  name="Arr_Time" value="<?php echo $fetch['Arr_Time'] ?>" >
                            </div>

                            <div class="form-group">
                            <button class="btn btn-primary" type="submit" name='edit'> Edit Train Schedule</button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal"> Close</button>
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

<!------------------------ ADD NEW SCHEDULE---------------->

<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" align="center">
            <div class="modal-header text-white"style="background-color:#c43c05">
                <h3 class="modal-title"><b>Add New Schedule</b></h3>
                <button type="button" class="close text-white " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>

        <div class="modal-body">
            <form action="" method="post">
                <table class="table ">
                <tr>
                        <th>Train Name</th>
                        <td><input type="text" class="form-control" name="Name"  value="<?php echo $_SESSION['CompanyName'] ?>" ></td>
                </tr>
                <tr>
                        <th>Username</th>
                        <td><input type="text" class="form-control" name="UName"value="<?php echo $_SESSION['UName'] ?>" ></td>
                </tr>

                    <tr>
                        <th>Train No</th>
                        <td><input type="text" class="form-control" name="TrainNo" required id=""></td>
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
                        <th>Dep. Date</th>
                        <td><input type="date"  class="form-control" name="Dept_Date" required id="">
                        </td>
                    </tr>

                    <tr>                        
                        <th>Dep. Time</th>
                        <td><input type="time"  class="form-control" name="Dept_Time" required id="">
                        </td>
                    </tr>

                    <tr>                        
                        <th>Arr. Time</th>
                        <td><input type="time"  class="form-control" name="Arr_Time" required id="">
                        </td>
                    </tr>

                    <tr>
                        <th>End</th>
                        <td><input type="text" class="form-control" name="End" required id="">
                        </td>
                    </tr>

                    <tr>
                        <th>Fare</th>
                        <td><input type="number" min='0' class="form-control" name="Price" required id="">
                        </td>
                    </tr>
                </table>
                <input class="btn btn-danger" type="submit" value="Add Train" name='submit'>                   
            </form>
            </div>
        </div>
    </div>
</div>

<?php
////////////// ADD Schedule ///////////////////

if (isset($_POST['submit'])) {
    
    $sql="INSERT INTO train_schedule(Name,UName,TrainNo,Seat,Start,End,Price,Dept_Date,Dept_Time,Arr_Time)
    VALUES('{$_POST["Name"]}','{$_POST["UName"]}','{$_POST["TrainNo"]}','{$_POST["Seat"]}','{$_POST["Start"]}',
    '{$_POST["End"]}','{$_POST["Price"]}','{$_POST["Dept_Date"]}','{$_POST["Dept_Time"]}','{$_POST["Arr_Time"]}')"; 
    
    if($con->query($sql))
    {
        echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Registraion.
                  </div>';
        
    }
}



////////////////////////// Edit  /////////////////////////////
if (isset($_POST['edit'])) {
    $Name = $_POST['Name'];
    $TrainNo = $_POST['TrainNo'];
    $Type = $_POST['Type'];
    $Seat = $_POST['Seat'];
    $Start = $_POST['Start'];
    $Dept_Date = $_POST['Dept_Date'];
    $Dept_Time = $_POST['Dept_Time'];
    $Arr_Time = $_POST['Arr_Time'];
    $End = $_POST['End'];
    $Price = $_POST['Price'];
    

    $sql="UPDATE train_schedule SET id='$id',Name='$Name',TrainNo='$TrainNo',  Seat='$Seat', Start='$Start', 
    S_Point='$S_Point',Dept_Date='$Dept_Date',Dept_Time='$Dept_Time', Price='$Price' WHERE id='$id' "; 
                
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

    $sql = "DELETE FROM `train_schedule` WHERE id=$id";
    
    $delete = mysqli_query($con,$sql);
    if($delete){

        header("Location:schedule.php");
    }



}
?>
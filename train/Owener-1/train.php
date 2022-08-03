<?php include("config.php");?>
<head>
    <title>View</title>
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


</head>

<div class="content">
    <!-- Main content -->
    <section class="content">
        
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header bg-primary text-center">
                    <h4><b>ALL TRAIN LIST</b> </h4>
                </div>
                <div class="card-header">
                    <div class='float-right-right'>
                     <button type="button" class="btn btn-primary"  data-toggle="modal"data-target="#add">Add New Train</button></div>
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
                    <th>Train No</th>
                    <th>Train Name</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Shovan Seat</th>
                    <th>S_Chair Seat</th>
                    <th>AC_Chair Seat</th>
                    <th>F_Seat Seat</th>
                    <th>F_Bearth Seat</th>
                    <th>AC_B Seat</th>
                    <th>AC_S Seat</th>
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

            $row = $conn->query("SELECT * FROM train");
            
            if ($row->num_rows < 1) echo "No Records Yet";
            
            $sn = 0;
            
            while ($fetch = $row->fetch_assoc()) {
                $id = $fetch['id'];
            ?>

        <tr>
            <td><?php echo ++$sn; ?></td>
            <td><?php echo $fetch['id']; ?></td>
            <td><?php echo $fetch['Name']; ?></td>
            <td><?php echo $fetch['Start']; ?></td>
            <td><?php echo $fetch['End']; ?></td>
            <td><?php echo $fetch['Shovan']; ?></td>
            <td><?php echo $fetch['S_Chair']; ?></td>
            <td><?php echo $fetch['AC_Chair']; ?></td>
            <td><?php echo $fetch['F_Seat']; ?></td>
            <td><?php echo $fetch['F_Bearth']; ?></td>
            <td><?php echo $fetch['AC_B']; ?></td>
            <td><?php echo $fetch['AC_S']; ?></td>
            
            <td>
            <form method="POST">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $id ?>"> Edit </button> 
                <input type="hidden" class="form-control" name="del_train" value="<?php echo $id ?>" required id="">
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
                
                            <p>Train Name :
                                <input type="text" class="form-control" value="<?php echo $fetch['Name'] ?>" name="Name" required minlength="3" id="">
                            </p>
                            <p>Start Journey :
                                <input type="text" class="form-control" value="<?php echo $fetch['Start'] ?>" name="Start"  id="">
                            </p>
                            <p>End Journey :
                                <input type="text" class="form-control" value="<?php echo $fetch['End'] ?>" name="End"  id="">
                            </p>
                            <p>Shovan Capacity : 
                                <input type="number" min='0' class="form-control" name="Shovan" value="<?php echo $fetch['Shovan'] ?>" required id="">
                            </p>
                            <p>S_Chair Capacity : 
                                <input type="number" min='0'class="form-control" name="S_Chair" value="<?php echo $fetch['S_Chair'] ?>" required id="">
                            </p>
                            <p>F_Chair Capacity :
                                <input type="text" class="form-control" value="<?php echo $fetch['F_Chair'] ?>" name="F_Chair" required minlength="3" id="">
                            </p>
                            <p>AC_Chair Capacity : 
                                <input type="number" min='0' class="form-control" name="AC_Chair" value="<?php echo $fetch['AC_Chair'] ?>" required id="">
                            </p>
                            <p>F_Seat Capacity : 
                                <input type="number" min='0'class="form-control" name="F_Seat" value="<?php echo $fetch['F_Seat'] ?>" required id="">
                            </p>
                            <p>F_Bearth Capacity : 
                                <input type="number" min='0'class="form-control" name="F_Bearth" value="<?php echo $fetch['F_Bearth'] ?>" required id="">
                            </p>
                            <div class="form-group">
                                <label>AC_B Capacity</label>
                                <input type="number" min='0'class="form-control" name="AC_B" value="<?php echo $fetch['AC_B'] ?>" required id="">
                            </div>

                            <div class="form-group">
                                <label>AC_S Capacity</label>
                                <input type="number" min='0'class="form-control" name="AC_S" value="<?php echo $fetch['AC_S'] ?>" required id="">
                            </div>
                            
                            <div class="form-group">
                            <button class="btn btn-primary" type="submit" name='edit'> Edit Train</button>
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

<!------------------------ ADD NEW TRAIN---------------->

<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" align="center">
            <div class="modal-header bg-primary">
                <h3 class="modal-title"><b>Add New Train</b></h3>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <div class="modal-body">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>Train Name</th>
                        <td><input type="text" class="form-control" name="Name" required minlength="3" id=""></td>
                    </tr>
                    <tr>
                        <th>Start</th>
                        <td><input type="text" class="form-control" name="Start" required id=""></td>
                    </tr>
                    <tr>
                        <th>End</th>
                        <td><input type="text" class="form-control" name="End" required id=""></td>
                    </tr>
                    <tr>
                        <th>Shovan Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="Shovan" required id=""></td>
                    </tr>
                    <tr>
                        <th>S_Chair Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="S_Chair" required id="">
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <th>F_Chair Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="F_Chair" required id="">
                        </td>
                    </tr>
                    <tr>                        
                        <th>AC_Chair Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="AC_Chair" required id="">
                        </td>
                    </tr>
                    <tr>
                        <th>F_Seat Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="F_Seat" required id="">
                        </td>
                    </tr>
                    <tr>
                        <th>F_Bearth Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="F_Bearth" required id="">
                        </td>
                    </tr>
                    <tr>
                        <th>AC_B Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="AC_B" required id="">
                        </td>
                    </tr>
                    <tr>
                        <th>AC_S Capacity</th>
                        <td><input type="number" min='0' class="form-control" name="AC_S" required id="">
                        </td>
                    </tr>
                    <tr>
                        
                    </tr>
                </table>
                <input class="btn btn-danger" type="submit" value="Add Train" name='submit'>                   
            </form>
            </div>
        </div>
    </div>
</div>

<?php
////////////// ADD TRAIN ///////////////////

if (isset($_POST['submit'])) {
    
    $sql="INSERT INTO train(Name,Start,End,Shovan,S_Chair,F_Chair,AC_Chair,F_Seat,F_Bearth,AC_B,AC_S)
    VALUES('{$_POST["Name"]}','{$_POST["Start"]}','{$_POST["End"]}','{$_POST["Shovan"]}','{$_POST["S_Chair"]}','{$_POST["F_Chair"]}',
    '{$_POST["AC_Chair"]}','{$_POST["F_Seat"]}','{$_POST["F_Bearth"]}','{$_POST["AC_B"]}','{$_POST["AC_S"]}')"; 
    
    if($con->query($sql))
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
    $Start = $_POST['Start'];
    $End = $_POST['End'];
    $Shovan = $_POST['Shovan'];
    $S_Chair = $_POST['S_Chair'];
    $F_Chair = $_POST['F_Chair'];
    $AC_Chair = $_POST['AC_Chair'];
    $F_Seat = $_POST['F_Seat'];
    $F_Bearth = $_POST['F_Bearth'];
    $AC_B = $_POST['AC_B'];
    $AC_S = $_POST['AC_S'];


            $sql="UPDATE train SET id='$id',Name='$Name',Start='$Start',End='$End', Shovan='$Shovan', S_Chair='$S_Chair', F_Chair='$F_Chair', 
            AC_Chair='$AC_Chair', F_Seat='$F_Seat',F_Bearth='$F_Bearth', AC_B='$AC_B', AC_S='$AC_S' WHERE id='$id' "; 
                
                if($con->query($sql))
                {
                  echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Update.
                  </div>';
                }
                
              }
/*
    $id = $_POST['id'];
    if (!isset($name, $first_seat, $second_seat)) {
        alert("Fill Form Properly!");
    } else {
        $conn = connect();
        //Check if train exists
        $check = $conn->query("SELECT * FROM train WHERE name = '$name' ")->num_rows;
        if ($check == 2) {
            alert("Train name exists");
        } else {
            $ins = $conn->prepare("UPDATE train SET name = ?, first_seat = ?, second_seat = ? WHERE id = ?");
            $ins->bind_param("sssi", $name, $first_seat, $second_seat, $id);
            $ins->execute();
            alert("Train Modified!");
            load($_SERVER['PHP_SELF'] . "$me");
        }
    }
}*/
///////////////////////// DELETE ////////////////////////////////////

if (isset($_POST['del_train'])) {

    $sql = "DELETE FROM `train` WHERE id=$id";
    
    $delete = mysqli_query($con,$sql);
    if($delete){

        header("Location:train.php");
    }

/*    
    $con = connect();
    $conn = $con->query("DELETE FROM train WHERE id = '" . $_POST['del_train'] . "'");
    if ($con->affected_rows < 1) {
        alert("Train Could Not Be Deleted. This Train Has Been Tied To Another Data!");
        load($_SERVER['PHP_SELF'] . "$me");
    } else {
        alert("Train Deleted!");
        load($_SERVER['PHP_SELF'] . "$me");
    }*/

}
?>
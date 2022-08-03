<?php include 'config.php' ?>

<head>
    <title>View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>


</head>

<div class="content">

<section class="content">
<div class="container-fluid">
    
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-success">
                <div class="card-header bg-dark text-white">
                <h3 class="card-title text-center">ALL ROUTES </h3></div>

                <div class="card-header">
                    <div class='float-right'>
                        <button type="button" class="btn btn-primary" data-toggle="modal"data-target="#add">
                            Add New Route</button></div>
                </div>
</div></div>
    <div class="card-body">
        <table id="example1" class="table table-hover w-100 table-bordered ">
            <thead class="bg-success text-white">
                <tr>
                    <th>S.N</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Update</th>
                    <th>Delete</th>
 
                </tr>
            </thead>
            <tbody>
                <?php

                $row = $con->query("SELECT * FROM train_route");
                if ($row->num_rows < 1) echo "No Records Yet";
                $sn = 0;

                while ($fetch = $row->fetch_assoc()) {
                    $id = $fetch['id'];
                ?>

                <tr>
                    <td><?php echo ++$sn; ?></td>
                    <td><?php echo $fetch['Start']; ?></td>
                    <td><?php echo $fetch['Stop'];

                ?></td>

                    <td>
                     <form method="POST">
                        <button type="button" class="btn btn-primary" data-toggle="modal"data-target="#edit<?php echo $id ?>">Edit</button> 
                     </td>   <td>
                        <input type="hidden" class="form-control" name="del_train"value="<?php echo $id ?>" required id="">
                        <button type="submit"onclick="return confirm('Are you sure delete this?')"
                            class="btn btn-danger"> Delete </button>
                        </form>
                    </td>
                </tr>


                <!----edit routes------>
                <div class="modal fade" id="edit<?php echo $id ?>">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header text-white"style= background-color:#DD4599;>
                                <h4 class="modal-title">Update Information</h4>
                                <button type="button" class="close" data-dismiss="modal"aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-md">
                                <form action="" method="post">
                                    <input type="hidden" class="form-control" name="id"
                                        value="<?php echo $id ?>" required id="">
                                    <p>From <input type="text" class="form-control" value="<?php echo $fetch['Start'] ?>" name="Start"required id="">
                                    </p>
                                    <p> To <input type="text" class="form-control"value="<?php echo $fetch['Stop'] ?>" name="Stop" required id="">
                                    </p>
                                    <div class="form-group ">
                                        <input class="btn btn-info" type="submit" value="Edit Route"name='edit'>
                                        <button type="reset" class="btn btn-danger" data-dismiss="modal" > Close</button>
                                    </div> 
                                </form>
                                
                                </div>
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

<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" align="center">
            <div class="modal-header">
                <h4 class="modal-title">Add New Route</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <table class="table table-bordered">
                        <tr>
                            <th>From</th>
                            <td><input type="text" class="form-control" name="Start" required id=""></td>
                        </tr>
                        <tr>
                            <th>To</th>
                            <td><input type="text" class="form-control" name="Stop" required id="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="btn btn-info" type="submit" value="Add Route" name='submit'>
                            </td>
                        </tr>
                    </table>
                </form>



            </div>

        </div>
    </div>
</div>


<?php
////////////// ADD Route ///////////////////

if (isset($_POST['submit'])) {
    $Start = $_POST['Start'];
    $Stop = $_POST['Stop'];
   
    $sql="INSERT INTO train_route(Start,Stop)
    VALUES('{$_POST["Start"]}','{$_POST["Stop"]}')"; 
    
    if($con->query($sql))
    {
        echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Added.
                  </div>';

        
    }

}

////////////// Edit Route ///////////////////
if (isset($_POST['edit'])) {
    $Start = $_POST['Start'];
    $Stop = $_POST['Stop'];
    

            $sql="UPDATE train_route SET Start='$Start', Stop='$Stop' WHERE id='$id' "; 
                
                if($con->query($sql))
                {
                  echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Update.
                  </div>';

                }
                

}
////////////// Delete Route ///////////////////
if (isset($_POST['del_train'])) {
    $sql = "DELETE FROM `train_route` WHERE id=$id";
    
    $delete = mysqli_query($con,$sql);
    if($delete){
        header("Location:route.php");
    }


}
?>
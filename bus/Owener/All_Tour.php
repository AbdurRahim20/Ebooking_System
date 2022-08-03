<?php include("config.php");
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
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header bg-primary">
                    <h4><b>ALL Tour Package</b> </h4>
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
            //$UName=$_SESSION["UName"];

            $row = $conn->query("SELECT * FROM tour ");
            
            if ($row->num_rows < 1) echo "No Records Yet";
            
            $sn = 0;
            while ($fetch = $row->fetch_assoc()) {
                $ID = $fetch['ID'];
                
        ?>

        <tr>
            <td><?php echo ++$sn; ?></td>
            
            <td><img src="<?php echo "images/".$fetch['Img']; ?>" width="100px" alt="Image"></td>
            <td><?php echo $fetch['Place']; ?></td>
            <td><?php echo date('d M Y',strtotime($fetch['Tour_Date'])) ?></td>
            <td ><?php echo date('M d,Y',strtotime($fetch['Last_date'])).' - '.date('M d,Y',strtotime($fetch['Date'])) ?></td>
            <td><?php echo $fetch['Price']; ?> BDT</td>
            <!--<td> <?//php  echo"<a href = 'view.php?ID=$ID'<button type='button' class='btn btn-success'>View</button>" ?></td>-->
            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#bd-example-modal-lg<?php echo $ID ?>">View More</button></td>
           
            <td>
            <form method="POST">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submit<?php echo $ID ?>"> Registraion </button>
            </form>
            </td>
        </tr>

        <!-------------- View ---------------->
        <div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg<?php echo $ID ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenter">VIew Description</h5>
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


        <!-------------- Registration -------------------->
        
<style>

.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
    </style>


        <div class="modal" id="submit<?php echo $ID ?>">
        
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-center"> 
                    <h4 class="modal-title"><b>Registration Your Trip</b> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        
                    <form action="" method="post">
                    <div class="form-content">
                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Package ID</label>
                                <input type="text" class="form-control" placeholder="Package Name" name="Pkg" value="<?php echo $fetch['ID'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                            <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Your Name" name="Name" >
                            </div>
                        </div>

                        <input type="hidden" class="form-control" name="UName" value="<?php echo $fetch['UName'] ?>" readonly>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Total Person</label>
                                <input type="number" class="form-control" placeholder="Total Person" name="Person" onkeyup="sum()" id="n2" >
                            </div>

                            <div class="form-group">
                            <label>Mobile No</label>
                                <input type="text" class="form-control" placeholder="Mobile No" name="Phone" >
                            </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Cost</label>
                            <input type="text" class="form-control" name="Price" value="<?php echo $fetch['Price'] ?>" onkeyup="sum()" id="n1" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label>Total Amount</label>
                                <input type="text" class="form-control" placeholder="Total Amount" name="Amount" id="txtResult" readonly />
                            </div>
                        
                            </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" placeholder="Your Email" name="Email" >
                            </div>

                            <div class="form-group">
                                <label>Your Address</label>
                                <input type="text" class="form-control" placeholder="Your Address" name="Address" >
                            </div>
                           
                            
                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Select Payment Method</label>
                            <select name="Method" id="Method" class="form-control">
                                <option >Islami Bank Bangladesh Limited</option>
                                <option >Shahjalal Islami Bank Limited</option>
                                <option >BRAC Bank Limited</option>
                                <option >City Bank Limited</option>
                                <option >Islami Bank Bangladesh Limited</option>
                                <option >Shahjalal Islami Bank Limited</option>
                                <option >Dutch-Bangla Bank Limited</option>
                                <option >Southeast Bank Limited</option>
                                <option >bKash</option>
                                <option >Nogod</option>
                                <option >Rocket</option>
                            </select>
                            </div>

                        <div class="form-group">
                            <label>Your Bank A/C OR Mobile No</label>
                            <input type="text" class="form-control" placeholder="Your Bank A/C OR Mobile No" name="Bank">
                            </div>
                            </div>   
                     

                    <div class="col-md-6">
                   
                     

                     <div class="form-group">
                     <label>Tnx ID</label>
                     <input type="text" class="form-control" placeholder="Total Amount" name="Tnx" >
                     </div>
                 
                            <div class="form-group">
                            <label>Pay Any Account: </label>
                            <p><?php echo $fetch['Method']; ?></p>
                            </div>

                        </div>
                    </div>
                    
                            <div class="form-group">
                            <button class="btn btn-primary" type="submit" name='submit'> Register</button>
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
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        function sum() {
            var n1 = document.getElementById('n1').value;
            var n2 = document.getElementById('n2').value;

            var result = parseFloat(n1) * parseFloat(n2);
            if (!isNaN(result)) {
                document.getElementById('txtResult').value = result;
            }
        }
    </script>


<?php

////////////////////////// Regi tour /////////////////////////////

if(isset($_POST["submit"]))
				{
							
									
                $sql="INSERT INTO tour_regi(Pkg,Name,UName,Email,Phone,Person,Address,Amount,Bank,Method,Tnx)
                VALUES('{$_POST["Pkg"]}','{$_POST["Name"]}','{$_POST["UName"]}','{$_POST["Email"]}',
                '{$_POST["Phone"]}','{$_POST["Person"]}','{$_POST["Address"]}','{$_POST["Amount"]}','{$_POST["Bank"]}','{$_POST["Method"]}','{$_POST["Tnx"]}')"; 
                
                if($con->query($sql))
                {
                  echo '
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Your has been Successfully Registraion.
                  </div>';
                }
                else{

                  echo '
                  <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Failed!</strong> Your has not been Registraion.Please Try Again.
                  </div>';

                }
              }

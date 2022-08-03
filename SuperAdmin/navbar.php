<?php include("config.php");
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">eBooking </a>
            
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="admin-dashboard.php" class="nav-item nav-link active">Home</a>
                </div>
              
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link"><?php echo $_SESSION["UName"]; ?></a>
                    <a href="#" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </nav>
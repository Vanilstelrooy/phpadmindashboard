<?php
    require_once("logics/dbconnection.php");
    $queryuser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");
    while($fetchuser = mysqli_fetch_array($queryuser))
    {
        $fullname = $fetchuser['fullname'];
    }


   session_start();
?>
<!DOCTYPE html>
<html>
 <?php require_once("includes/headers.php") ?> 
<body>
	<!-- All our code. write here   -->
	<?php require_once("includes/navbar.php") ?>
	<div class="sidebar">
	<?php require_once("includes/sidebar.php") ?>
	</div>
	<div class="maincontent">
        <div class="container-fluid">
            <div class="row">
             <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark text-center text-white">
                        <h4 >Edit Student :<?php echo $fullname?></h4>
                    </div>
                </div>
             </div>
            </div>
		</div>
	</div>

	
    <?php require_once("includes/scripts.php") ?>
</body>
</html>
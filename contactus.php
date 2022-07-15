<?php
  require_once("logics/dbconnection.php");
  $sqlQuery = mysqli_query($conn, "SELECT * FROM contactus");
   
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
					<div class="card-header bg-dark text-white text-center">
                         <span>Students</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font: size 12px;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Messages</th>
                                    <th>Enrolled on</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($fetchrecords = mysqli_fetch_array($sqlQuery)){ ?>
                                    <tr>
                                    <td><?php echo $fetchrecords ['no']; ?></td>
                                    <td><?php echo $fetchrecords ['firstname']; ?></td>
                                    <td><?php echo $fetchrecords ['lastname']; ?></td>
                                    <td><?php echo $fetchrecords ['email']; ?></td>
                                    <td><?php echo $fetchrecords ['phonenumber']; ?></td>
                                    <td><?php echo $fetchrecords ['message']; ?></td>
                                    <td><?php echo $fetchrecords ['created_at']; ?></td>
                              <?php }?>
                            </tbody> 

                        </table>
                    </div>
				</div>
			</div>
		</div>
	</div>
	
    <?php require_once("includes/scripts.php") ?> 
</body>
</html>
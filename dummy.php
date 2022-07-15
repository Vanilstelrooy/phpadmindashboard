<div class="row pt-5">

            <div class="col-lg-12">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rem quasi esse, laudantium, molestiae consectetur minus quibusdam vitae assumenda perspiciatis officia quia deleniti, omnis natus?</p>
            <form action="index.php" method="POST">       
              <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" name="firstname"  class="form-control" placeholder="Enter Your First Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter Your Last Name">
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6 col-md-6">
                        <label for="phonenumber" class="form-label">Phone number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                    </div>
                   </div>
               </div>
               <div class="row">
                   <div class="mb-3 col-lg-12">
                    <label for="message" class="form-label">Enter Your Message</label>
                    <textarea placeholder="Enter your Message" name="message" id="" cols="30" rows="5"  class="form-control" ></textarea>
                   </div>
               </div>
               <button type="submit"name="submitButton" class="btn btn-primary" >Send A Message</button>
            </form>
        
            </div>
            
</div>
<?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "web2";
  
   $conn = mysqli_connect($server,$username,$password,$database);

  $sqlQuery = mysqli_query($conn, "SELECT * FROM enrollment");
  while($fetchrecords = mysqli_fetch_array($sqlQuery))
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
                         <span>Contact Us</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font: size 12px;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Enrolled on</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($fetchrecords = mysqli_fetch_array($sqlQuery)){ ?>
                                    <tr>
                                    <td><?php echo $fetchrecords ['no']; ?></td>
                                    <td><?php echo $fetchrecords ['firstname']; ?></td>
                                    <td><?php echo $fetchrecords ['lastname']; ?></td>
                                    <td><?php echo $fetchrecords ['phonenumber']; ?></td>
                                    <td><?php echo $fetchrecords ['email']; ?></td>
                                    <td><?php echo $fetchrecords ['message']; ?></td>
                                    <td><?php echo $fetchrecords ['created_at']; ?></td>
                                    </tr>
                              <?php }?>
                            </tbody> 

                        </table>
                    </div>
				</div>
			</div>
        </div>
        

	
    <?php require_once("includes/scripts.php") ?>
</body>
</html>
<?php
  require_once("logics/dbconnection.php");
  $sqlQuery = mysqli_query($conn, "SELECT * FROM contactus");
  while($FetchStudentsRecords = mysqli_fetch_array($sqlQuery))
  {
    $firstname = $FetchStudentsRecords['firstname'];
    $lastname = $FetchStudentsRecords['lastname'];
    $email = $FetchStudentsRecords['email'];
    $phone = $FetchStudentsRecords['phonenumber'];
    $message = $FetchStudentsRecords['message'];
  }
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
        </div>
        

	
    <?php require_once("includes/scripts.php") ?>
</body>
</html>
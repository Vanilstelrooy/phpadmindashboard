<?php
    require_once("logics/dbconnection.php");
    $queryuser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");
    while($fetchuser = mysqli_fetch_array($queryuser))
    {
        $fullname = $fetchuser['fullname'];
        $phone = $fetchuser['phonenumber'];
        $email = $fetchuser['email'];
        $gender = $fetchuser['gender'];
        $course = $fetchuser['course'];
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
                        <h4 >Edit Student </h4>
                    </div>
                    <div class="card-body">
                    <form action="enroll.php" method="POST">       
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" value="<?php echo $fullname?>" placeholder="Enter Your Full Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control"value="<?php echo $phone?>"  placeholder="Enter Your Phone Number">
                </div>
        </div> 
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email?>"  placeholder="Enter Your Email Address">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="gender" class="form-label">Whats your gender?</label><br>
                    <select name="gender"  aria-label="Default select example" class="form-control" >
                        <option  selected><?php echo $gender?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
        </div>
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="course"class="form-label ">What's your prefered course?</label><br>
                    <select name="course" aria-label="Default select example" class="form-control">
                        <option selected><?php echo $course?></option>
                        <option value="Android App Development">Android App Development</option>
                        <option value="Web Design & Development">Web Design & Development</option>
                        <option value="Data Analysis">Data Analysis</option>
                        <option value="Cyber Security">Cyber Security</option>
                    </select>
                </div>
        </div>      
        <button type="submit"name="submitButton" class="btn btn-outline-primary" >Update Record</button>
      </form> 
                    </div>
                </div>
             </div>
            </div>
		</div>
	</div>

	
    <?php require_once("includes/scripts.php") ?>
</body>
</html>
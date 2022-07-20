<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if( isset($_POST['submitButton']) )
{
    $fullname = $_POST ['fullname'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];
    $gender = $_POST ['gender'];
    $course = $_POST ['course'];

    $insertData = mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phone','$email','$gender','$course')");
    if($insertData)
    {
        echo "Data Submitted Successfully";
    }
    else
    {
        echo "Error Occured";
    }
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
        <form action="addstudent.php" method="POST">       
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone Number">
                </div>
        </div> 
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="gender" class="form-label">Whats your gender?</label>
                    <select name="gender" aria-label="Default select example" class="form-select">
                        <option selected>--select your gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
        </div>
        <P style="text-align:center;">In order to complete your registration to the bootcamp,you are required to select one course you will be <br> undertaking. Please NOTE that this will be your learningtrack during the 2-weeks immersion.
        </P>
        <div class="row">
                <div class="mb-3 col-lg-6">
                    <select name="course" aria-label="Default select example" class="form-control">
                    <label for="course"class="form-label">What's your prefered course?</label>
                        <option selected>--select your courses--</option>
                        <option value="Android App Development">Android App Development</option>
                        <option value="Web Design & Development">Web Design & Development</option>
                        <option value="Data Analysis">Data Analysis</option>
                        <option value="Cyber Security">Cyber Security</option>
                    </select>
                </div>
        </div>      
    
        
        <button type="submit"name="submitButton" class="btn btn-primary" >Submit Application</button>
      </form> 
		</div>
	</div>

	
    <?php require_once("includes/scripts.php") ?>
</body>
</html>
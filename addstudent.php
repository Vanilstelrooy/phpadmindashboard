<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if( isset($_POST['submitButton'])  )
{
    // 1.Fetch Form Data
        $firstName = $_POST ['firstname'];
       $lastName = $_POST ['lastname'];
       $email = $_POST ['email'];
       $phone = $_POST ['phonenumber'];
       $message = $_POST ['message'];
    // 2.Submit Form Data
       $insertData = mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,email,phonenumber,message)
       VALUES('$firstName','$lastName','$email','$phone','$message')");
       if($insertData)
       {
           echo "Data Submitted Successfully";
       }
       else{
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
        <div class="container">
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rem quasi esse, laudantium, molestiae consectetur minus quibusdam vitae assumenda perspiciatis officia quia deleniti, omnis natus?</p>
            <form action="addstudent.php" method="POST">       
               <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter Your First Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter Your Last Name">
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6 ">
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
         <!-- Contact Us Ends Here -->
         <hr>
         <footer>
             &copy; Vanilstelrooy Obare 2022
         </footer>

         </div>
        
       
    </div>
		</div>
	</div>

	
    <?php require_once("includes/scripts.php") ?>
</body>
</html>
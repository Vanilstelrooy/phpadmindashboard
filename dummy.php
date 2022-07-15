<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "web2";

  $conn = mysqli_connect($server,$username,$password,$database);

  $sqlQuery = mysqli_query($conn, "SELECT * FROM contactus");
  $fetchrecords = mysqli_fetch_array($sqlQuery);
//   echo $fetchrecords['firstname'] .''.$fetchrecords['email'];
  while($fetchrecords = mysqli_fetch_array($sqlQuery)){
    echo $fetchrecords['firstname'] .' '.$fetchrecords['email'].'<br>';
  };
?>
<tr>
                                    <td>1.</td>
                                    <td>Vanilstelrooy Obare</td>
                                    <td>+254702424203</td>
                                    <td>Male</td>
                                    <td>vanistelrooyobare@gmail.com</td>
                                    <td>Web Design & Development</td>
                                    <td>25th August 2022</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-small">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-info btn-small">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-small">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
<div class="row pt-5">
            <h1>Register Now</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rem quasi esse, laudantium, molestiae consectetur minus quibusdam vitae assumenda perspiciatis officia quia deleniti, omnis natus?</p>
            <form action="index.php" method="POST">       
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
     <div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
                         <span>Messsages</span>
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
                                    <th>Message</th>
                                    <th>Enrolled on</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($fetchStudentsRecords = mysqli_fetch_array($sqlQuery)){ ?>
                                    <tr>
                                    <td><?php echo $fetchStudentsRecords ['no']; ?></td>
                                    <td><?php echo $fetchStudentsRecords ['firstname']; ?></td>
                                    <td><?php echo $fetchStudentsRecords ['lastname']; ?></td>
                                    <td><?php echo $fetchStudentsRecords ['email']; ?></td>
                                    <td><?php echo $fetchStudentsRecords ['phonenumber']; ?></td>
                                    <td><?php echo $fetchStudentsRecords ['message']; ?></td>
                                    <td><?php echo $fetchStudentsRecords ['created_at']; ?></td>
                                    <td> <a href="edit-enrollment.php?id=<?php  echo $fetchrecords ['no']?>" class="btn btn-primary btn-small">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="view-enrollment.php?id=<?php  echo $fetchrecords ['no']?>" class="btn btn-info btn-small">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="delete-enrollment.php?id=<?php  echo $fetchrecords ['no']?>" class="btn btn-danger btn-small">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    </tr>
                              <?php }?>
                            </tbody> 

                        </table>
                    </div>
				</div>
			</div>
		</div>
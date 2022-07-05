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
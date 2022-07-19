<?php
    $message = "";
    require_once("logics/dbconnection.php");
    $queryuser = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'  ");
    while($fetchuser = mysqli_fetch_array($queryuser))
    {
        $id = $fetchuser['no'];
        $fullname = $fetchuser['fullname'];
        $phone = $fetchuser['phonenumber'];
        $email = $fetchuser['email'];
        $gender = $fetchuser['gender'];
        $course = $fetchuser['course'];
    }
    // Update Records
    if(isset($_POST['updaterecords']))
    {
         // fetch form data
    $name = $_POST['fullname'];
    $forphone = $_POST['phone'];
    $emailaddress = $_POST['email'];
    $forgender = $_POST['gender'];
    $forcourse = $_POST['course'];
    // updaterecords
   $updatequery = mysqli_query($conn, "UPDATE enrollment SET fullname = '$name',phonenumber = '$forphone' ,email = '$emailaddress' ,gender = '$forgender' ,course ='$forcourse' WHERE no='".$_GET['id']."'");
    if($updatequery)
    {
        $message= "Data Updated";
    }
    else{
        $message= "Error Occured";
    }
    }
   
   session_start();
?>
<?php
session_start();
$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");

if(isset($_POST['registerbtn'])) 
{
   $fname = $_POST['fname'];
   $mname = $_POST['mname'];
   $lname = $_POST['lname'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $dept = $_POST['dept'];
   $work = $_POST['work'];
   $status = $_POST['status'];

    $query = "INSERT INTO employee (fname,mname,lname,gender,email,address,phone,department,work,status) 
    VALUES('$fname','$mname','$lname','$gender','$email','$address','$phone','$dept','$work','$status')";
    $query_run = mysqli_query($connection,$query);
 
    if ($query_run) {
        $_SESSION['success'] = "Employee added with success!";
        header('Location: register.php');
    }else {
     $_SESSION['status'] = "Employee not added!";
     header('Location: register.php');
    }

}
?>

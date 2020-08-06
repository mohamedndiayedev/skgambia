<?php
session_start();
$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");


if(isset($_POST['update']))
{
   $id = $_POST['edit_id'];
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

   $query = "UPDATE employee SET fname='$fname',mname='$mname',lname='$lname',gender='$gender', email='$email', address='$address', 
   phone='$phone', work='$work', department='$dept', status='$status' WHERE id='$id'";
   $query_run = mysqli_query($connection, $query);

   if ($query_run)
    {
       $_SESSION['success'] = "data updated with success!";
        header('Location: register.php');

   } else {
    $_SESSION['status'] = "data not updated, check infos again!";
   }
}

?>

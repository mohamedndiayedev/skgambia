<?php
session_start();
$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");
    if(isset($_POST['save_bank'])) 
 {
   $bank = $_POST['bank'];
   $number = $_POST['numb'];


    $query = "INSERT INTO bank (bank_name,account_number) 
    VALUES('$bank','$number') ";
    $query_run = mysqli_query($connection,$query);
 
    if ($query_run) {
        $_SESSION['success'] = "Employee added with success!";
        header('Location: bank_related.php');
    }else {
     $_SESSION['status'] = "Employee not added!";
     header('Location: bank_related.php');
    }
 
   }

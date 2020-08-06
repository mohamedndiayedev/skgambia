<?php
session_start();
$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");

if(isset($_POST['updatemanager']))
{
   $id = $_POST['edit_id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $dept = $_POST['dept'];

   $query = "UPDATE managers SET username='$name', email='$email',address='$address',phone='$phone',dept='$dept' WHERE id='$id'";
   $query_run = mysqli_query($connection, $query);

   if ($query_run)
    {
       $_SESSION['success'] = "Vos infos sont mis à jour!";
        header('Location: managers.php');

   } else {
    $_SESSION['status'] = "Infos pas à jour!";
   }
}

?>

<?php
session_start();
$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");

if(isset($_POST['delete_caramel']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM caramel WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

   if($query_run)
   {
    $_SESSION['status_code'] = "Record deleted with success!";
    header('Location: caramel.php');
   }else 
   {
    $_SESSION['status'] = "Record not deleted!";
    header('Location: caramel.php');
   }
}
?>

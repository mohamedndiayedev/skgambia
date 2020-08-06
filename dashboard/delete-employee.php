<?php
session_start();
$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM employee WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

   if($query_run)
   {
    $_SESSION['success'] = "Client(e) supprimé(e) avec succès! ";
    header('Location: register.php');
   }else 
   {
    $_SESSION['status'] = "Client(e) non supprimé(e)!";
    header('Location: register.php');
   }
}
?>

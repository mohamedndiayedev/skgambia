<?php
session_start();
$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");

if(isset($_POST['update_bank']))
{
   $id = $_POST['edit_id'];
   $bank = $_POST['bank'];
   $number = $_POST['numb'];

   $query = "UPDATE bank SET bank_name='$bank', account_number='$number' WHERE id='$id'";
   $query_run = mysqli_query($connection, $query);

   if ($query_run)
    {
       $_SESSION['success'] = "Vos infos sont mis à jour!";
        header('Location: bank_related.php');

   } else {
    $_SESSION['status'] = "Infos pas à jour!";
   }
}

?>

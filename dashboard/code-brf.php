<?php
session_start();
$connection = mysqli_connect("localhost","root","","skgambia");

    if(isset($_POST['brfbtn'])) 
 {
   $balance = $_POST['cheese1'];
   $less1 = $_POST['cheese2'];
   $less2 = $_POST['cheese3'];
   $less3 = $_POST['cheese4'];
   $closing = $_POST['cheese5'];
   $comment = $_POST['cheese6'];

    $query = "INSERT INTO brf (balance,less1,less2,less3,closing,comment) 
    VALUES('$balance','$less1','$less2','$less3','$closing','$comment')";
    $query_run = mysqli_query($connection,$query);
 
    if ($query_run) {
        $_SESSION['success'] = "data added with success!";
        header('Location: brf.php');
    }else {
     $_SESSION['status'] = "data not added!";
     header('Location: brf.php');
    }
 
   }

/*Code helping to delete data from the Database */

if(isset($_POST['deletebrf']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM brf WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

   if($query_run)
   {
    $_SESSION['success'] = "data deleted with success! ";
    header('Location: brf.php');
   }else 
   {
    $_SESSION['status'] = "data not deleted!";
    header('Location: brf.php');
   }
}

   ?>
<?php 
session_start();
  include('includes/header.php');
  include('includes/navbar-brt.php');
?>

<div class="container-fluid">
        <div class="card shadow mb-4">
        <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Sky High Bank Reconciliation File</h6>
      </div>
<div class="card-body">
<?php

$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");
if(isset($_POST['edit_btn'])) 
{
   $id = $_POST['edit_id'];
   $query = "SELECT * FROM brt WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
   {

    ?>
    <form action="update-brt.php" method="post">
        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
        <div class="form-group">
                <label>Balance as per Cash Book (GMD)</label>
                <input class="form-control" type="number" value="<?php echo $row['balance'] ?>" name="cheese1" placeholder="enter data  *">
        </div>

        <div class="form-group">
                <label>Add: Unrepresented Cheque<br/>Details:</label>
                <input class="form-control" type="text" value="<?php echo $row['less1'] ?>" name="cheese2" placeholder="enter data*">
                
         </div>
         <div class="form-group">
                <label>Less: Uncleared Cheque<br/>Amount: (GMD)</label>
                <input class="form-control" type="number" value="<?php echo $row['less2'] ?>" name="cheese3" placeholder="enter data *">
         </div>

         <div class="form-group">
                <label>Less Bank Charges<br/>Details:</label>
                <textarea class="form-control" type="text" value="<?php echo $row['less3'] ?>" name="cheese4" placeholder="enter data *">
                </textarea>
         </div>
         <div class="form-group">
                <label>Closing Balance per Reconcilition (GMD)<br/>Bank Statement</label>
                <input class="form-control" type="number" value="<?php echo $row['closing'] ?>" name="cheese5" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Comment</label>
                <input class="form-control" type="text" value="<?php echo $row['comment'] ?>" name="cheese6" placeholder="enter data *">
         </div>
        </div>

         <a href="brt.php" class="btn btn-danger">Cancel</a>
         <button type="submit" name="updatebrt" class="btn btn-primary">Update</button>
   </form>
      <?php
    }
}

?>

</div>
</div>
</div>
</div>


<?php 
  include('includes/scripts.php');
  include('includes/footer.php');
?>

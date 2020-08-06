<?php 
session_start();
  include('includes/header.php');
  include('includes/navbar-employee.php');
?>

<div class="container-fluid">
        <div class="card shadow mb-4">
        <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Infos Employee</h6>
      </div>
<div class="card-body">
<?php

$connection = mysqli_connect("iwqrvsv8e5fz4uni.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ybohxgtnw8ag3b1l","xtf6joq3n6czftrh","v1ydnphp6nxbbqix");
if(isset($_POST['edit_btn'])) 
{
   $id = $_POST['edit_id'];
   $query = "SELECT * FROM employee WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
   {

    ?>
    <form action="update-employee.php" method="post">
        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
        <div class="form-group">
                <label>First Name</label>
                <input class="form-control" value="<?php echo $row['fname'] ?>" type="text" name="fname" placeholder="First Name *">
        </div>
              <div class="form-group">
                <label>Middle Name</label>
                <input class="form-control" value="<?php echo $row['mname'] ?>" type="text" name="mname" placeholder="Middle Name *">
        </div>
              <div class="form-group">
                <label>Last Name</label>
                <input class="form-control" value="<?php echo $row['lname'] ?>" type="text" name="lname" placeholder="Gender *">
        </div>
                    <div class="form-group">     
                    <label for="genders">Gender</label>
                  <select id="status" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
        </div>
        <div class="form-group">
                <label>Email</label>
                <input class="form-control" value="<?php echo $row['email'] ?>" type="email" name="email" placeholder="Email *">
         </div>

         <div class="form-group">
                <label>Addresse</label>
                <input class="form-control" value="<?php echo $row['address'] ?>" type="text" name="address" placeholder="Address *">
        </div>
        <div class="form-group">
                <label>Phone</label>
                <input class="form-control" value="<?php echo $row['phone'] ?>" type="text" name="phone" placeholder="Phone Number *">
        </div>
      <div class="form-group">
                           
                    <label for="depts">Department</label>
                  <select id="dept" name="dept">
                    <option value="Procurement">Procurement</option>
                    <option value="Records">Records</option>
                    <option value="Sales">Sales</option>
                    <option value="Production">Production</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Finance">Finance</option>
                    <option value="Human Resources">Human Resources</option>
                  </select>
 
               </div>
        <div class="form-group">
                <label>Work Position</label>
                <input class="form-control" value="<?php echo $row['work'] ?>" type="text" name="work" placeholder="Work Position *">
        </div>
              <div class="form-group">
                                   
                    <label for="cars">Working Status</label>
                  <select id="status" name="status">
                    <option value="Active">Active</option>
                    <option value="Suspended">Suspended</option>
                    <option value="Terminated">Terminated</option>
                    <option value="Leave">Leave</option>
                  </select>
        </div>
         <a href="register.php" class="btn btn-danger">Cancel</a>
         <button type="submit" name="update" class="btn btn-primary">Update</button>
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

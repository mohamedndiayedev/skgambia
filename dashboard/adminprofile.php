<?php 
session_start();
include('database/dbconfig.php');
include('includes/header-cheese.php');
include('includes/navbar-adminprofile.php');
include('includes/scripts.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Profiles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"&times;</span>
        </button>
      </div>
    <form action="code-adminprofile.php" method="POST">
        <div class="modal-body">

         <div class="form-group">
                <label>Admin Name</label>
                <input class="form-control" type="text" name="cheese1" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" type="number" name="cheese2" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="cheese3" placeholder="enter data *">
         </div>

         <div class="form-group">
                <label>Profile Picture</label>
                <input class="form-control" type="file" name="cheese4" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Date</label>
                <input class="form-control" type="date" name="cheese5" placeholder="enter data *">
         </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="adminprofilebtn" class="btn btn-primary">Save</button>
        </div>
    </form>

    </div>
   </div>
</div>

      <div class="container-fluid">
      <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">ADMIN PROFILES
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Add admin
              </button>
        </h6><br/>
        <h6>
        <p><strong>All Admin Authorized to this Platform</strong></p>
        <p><strong>SKY HIGH GROUP - ULTIMATE DASHBOARD</strong></p>
        </h6>
     </div>
      <div class="table-responsive">

       <?php 
           $query = "SELECT * FROM adminprofile";
           $query_run = mysqli_query ($connection, $query);
       ?>
           <table class="table table-striped" id="dataTable" while="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Admin</th>
                            <th>Administrator Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Photo</th>
                            <th>Date</th>
                            <th>Modify</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
        <?php 
        
        if(mysqli_num_rows($query_run) > 0){
           
          while ($row = mysqli_fetch_assoc($query_run)) 
          {
            ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['admin']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo '<img src="upload/'.$row['photo'].'" alt="Photo" width="170px;" height="150px;">' ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td>
                              <form action="edit-adminprofile.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>"> 
                                <button type="submit" name="edit_btn" class="btn btn-success">Modify</button>
                             </form>
                            </td>
                            <td>
                             <form action="delete-adminprofile.php" method="post"> 
                             <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>"> 
                        <button type="submit" name="delete_adminprofile" class="btn btn-danger" >Delete</button>
                              </form>
                            </td>
                    </tr>
     <?php
        }
      } else {echo "No Recors Found";
      }
      ?>
                    </tbody>
           </table>
         </div>

     </div>
<?php 
  include('includes/scripts.php');
  include('includes/footer.php');
?>
   </div>

</div>






<?php 
session_start();
include('database/dbconfig.php');
include('includes/header.php');
include('includes/navbar-datalands.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Type of House or Land</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"&times;</span>
        </button>
      </div>


    <form action="code-datalands.php" method="POST">
        <div class="modal-body">

        <div class="form-group">
                <label>Type of Product</label>
                <input class="form-control" type="text" name="type" placeholder="type  *">
        </div>

        <div class="form-group">
                <label>Reference Number</label>
                <input class="form-control" type="text" name="reference" placeholder="reference *">
         </div>

         <div class="form-group">
                <label>Location</label>
                <input class="form-control" type="text" name="location" placeholder="location *">
         </div>
         <div class="form-group">
                <label>Land Area</label>
                <input class="form-control" type="text" name="area" placeholder="surface *">
         </div>
         <div class="form-group">
                <label>Company Owner</label>
                <input class="form-control" type="text" name="company" placeholder="company *">
         </div>
         <div class="form-group">
                <label>Selling Status</label>
                <input class="form-control" type="text" name="status" placeholder="status *">
         </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="datalands" class="btn btn-primary">Save</button>
        </div>
    </form>

    </div>
   </div>
</div>

      <div class="container-fluid">

      <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Check Lands Database
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Add new land
              </button>
        </h6>
     </div>
      <div class="table-responsive">

       <?php 
           $query = "SELECT * FROM datalands";
           $query_run = mysqli_query ($connection, $query);
       ?>
           <table class="table table-bordered" id="dataTable" while="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Product</th>
                            <th>Type of product</th>
                            <th>Reference Number</th>
                            <th>Location</th>
                            <th>Land Area</th>
                            <th>Company Owner</th>
                            <th>Selling Status</th>
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
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['ref']; ?></td>
                            <td><?php echo $row['loc']; ?></td>
                            <td><?php echo $row['area']; ?></td>
                            <td><?php echo $row['company']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                              <form action="edit-datalands.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>"> 
                                <button type="submit" name="edit_btn" class="btn btn-success">Modidy</button>
                             </form>
                            </td>
                            <td>
                             <form action="code-datalands.php" method="post"> 
                             <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>"> 
                        <button type="submit" name="deletedatalands" class="btn btn-danger" >Delete</button>
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




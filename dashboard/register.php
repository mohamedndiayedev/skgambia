<?php 
session_start();
include('database/dbconfig.php');
include('includes/header.php');
include('includes/navbar-employee.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Infos Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"&times;</span>
        </button>
      </div>


    <form action="code.php" method="POST">
        <div class="modal-body">

        <div class="form-group">
                <label>Fisrt Name</label>
                <input class="form-control" type="text" name="fname" placeholder="Fisrt Name  *">
        </div>
          
                  <div class="form-group">
                <label>Middle Name</label>
                <input class="form-control" type="text" name="mname" placeholder="Last Name  *">
        </div>
                  <div class="form-group">
                <label>Last Name</label>
                <input class="form-control" type="text" name="lname" placeholder="Middle Name  *">
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
                <input class="form-control" type="email" name="email" placeholder="Email *">
         </div>

         <div class="form-group">
                <label>Adress</label>
                <input class="form-control" type="text" name="address" placeholder="Adress *">
         </div>
         <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" type="text" name="phone" placeholder="Phone Number *">
         </div>

         <div class="form-group">
                <label>Job Title</label>
                <input class="form-control" type="text" name="work" placeholder="Work Position *">
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
                           
                    <label for="cars">Working Status</label>
                  <select id="status" name="status">
                    <option value="active">Active</option>
                    <option value="suspend">Suspended</option>
                    <option value="terminate">Terminated</option>
                    <option value="leave">Leave</option>
                  </select>
 
               </div>

         <input type="hidden" name="user-type" value="admin"></input>


        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
    </form>

    </div>
   </div>
</div>

      <div class="container-fluid">

      <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Infos Employee
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Add an Employee in the System
              </button>
        </h6>
     </div>
      <div class="table-responsive">

       <?php 
           $query = "SELECT * FROM employee";
           $query_run = mysqli_query ($connection, $query);
       ?>
           <table class="table table-bordered" id="dataTable" while="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Employee</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Gender</th> 
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Department</th>
                            <th>Job Title</th>
                            <th>Working Status</th>
                            <th>Modify</th>
                         
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
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['mname']; ?></td>
                            <td><?php echo $row['lname']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                          <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['work']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                              <form action="register-edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>"> 
                                <button type="submit" name="edit_btn" class="btn btn-success">Modify</button>
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




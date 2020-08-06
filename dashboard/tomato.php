<?php 
session_start();
include('database/dbconfig.php');
include('includes/header-cheese.php');
include('includes/navbar-tomato.php');
include('includes/scripts.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CORNPUFF TOMATO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"&times;</span>
        </button>
      </div>


    <form action="tomato-code.php" method="POST">
        <div class="modal-body">

        <div class="form-group">
                <label>Date</label>
                <input class="form-control" type="date" name="cheese1" placeholder="enter data  *">
        </div>

        <div class="form-group">
                <label>Stock Opening Bal.</label>
                <input class="form-control" type="number" name="cheese2" placeholder="enter data *">
         </div>

         <div class="form-group">
                <label>New Stock per Bag</label>
                <input class="form-control" type="number" name="cheese3" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Total Stock Taken</label>
                <input class="form-control" type="number" name="cheese4" placeholder="enter data *">
         </div>

         <div class="form-group">
                <label>Bal. B4 Stock Closing</label>
                <input class="form-control" type="number" name="cheese5" placeholder="enter data *">
         </div>
         
         <div class="form-group">
                <label>Units Per Bag</label>
                <input class="form-control" type="number" name="cheese6" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Retail Price (GMD)</label>
                <input class="form-control" type="number" name="cheese7" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Cash QTY Sold</label>
                <input class="form-control" type="number" name="cheese8" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Total Value (GMD)</label>
                <input class="form-control" type="number" name="cheese9" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Credit QTY Sold</label>
                <input class="form-control" type="number" name="cheese10" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Total Value (GMD)</label>
                <input class="form-control" type="number" name="cheese11" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Wholesale Price (GMD)</label>
                <input class="form-control" type="number" name="cheese12" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Cash QTY Sold</label>
                <input class="form-control" type="number" name="cheese13" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Total Value (GMD)</label>
                <input class="form-control" type="number" name="cheese14" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Credit QTY Sold</label>
                <input class="form-control" type="number" name="cheese15" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Total Value (GMD)</label>
                <input class="form-control" type="number" name="cheese16" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>GIFTS Per Bag</label>
                <input class="form-control" type="number" name="cheese17" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Total Stock Returns</label>
                <input class="form-control" type="number" name="cheese18" placeholder="enter data *">
         </div>
         <div class="form-group">
                <label>Stock Closing Bal.</label>
                <input class="form-control" type="number" name="cheese19" placeholder="enter data *">
         </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="tomatobtn" class="btn btn-primary">Save</button>
        </div>
    </form>

    </div>
   </div>
</div>

      <div class="container-fluid">

      <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">CORNPUFF TOMATO File
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Add data
              </button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Export to Excel File
              </button>
        </h6><br/>
        <h6>
        <p><strong>SALES & STOCK RECORD</strong></p>
        <p><strong>CORNPUFF TOMATO</strong></p>
        </h6>
     </div>
      <div class="table-responsive">

       <?php 
           $query = "SELECT * FROM tomato";
           $query_run = mysqli_query ($connection, $query);
       ?>
           <table class="table table-striped" id="dataTable" while="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Stock Opening Bal.</th>
                            <th>New Stock per Bag</th>
                            <th>Total Stock Taken</th>
                            <th>Bal. B4 Stock Closing</th>
                            <th>Units Per Bag</th>
                            <th>Retail Price (GMD)</th>
                            <th>Cash QTY Sold</th>
                            <th>Total Value (GMD)</th>
                            <th>Credit QTY Sold</th>
                            <th>Total Value (GMD)</th>
                            <th>Wholesale Price (GMD)</th>
                            <th>Cash QTY Sold</th>
                            <th>Total Value (GMD)</th>
                            <th>Credit QTY Sold</th>
                            <th>Total Value (GMD)</th>
                            <th>GIFTS Per Bag</th>
                            <th>Total Stock Returns</th>
                            <th>Stock Closing Bal.</th>
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
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['sob']; ?></td>
                            <td><?php echo $row['nsb']; ?></td>
                            <td><?php echo $row['tst']; ?></td>
                            <td><?php echo $row['bbsc']; ?></td>
                            <td><?php echo $row['upb']; ?></td>
                            <td><?php echo $row['rtgmd']; ?></td>
                            <td><?php echo $row['cqs']; ?></td>
                            <td><?php echo $row['tvgmd1']; ?></td>
                            <td><?php echo $row['cqs1']; ?></td>
                            <td><?php echo $row['tvgmd2']; ?></td>
                            <td><?php echo $row['wpgmd']; ?></td>
                            <td><?php echo $row['cqs2']; ?></td>
                            <td><?php echo $row['tvgmd3']; ?></td>
                            <td><?php echo $row['cqs3']; ?></td>
                            <td><?php echo $row['tvgmd4']; ?></td>
                            <td><?php echo $row['gpb']; ?></td>
                            <td><?php echo $row['tsr']; ?></td>
                            <td><?php echo $row['scb']; ?></td>
                            <td>
                              <form action="edit-tomato.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>"> 
                                <button type="submit" name="edit_btn" class="btn btn-success">Modidy</button>
                             </form>
                            </td>
                            <td>
                             <form action="delete-tomato.php" method="post"> 
                             <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>"> 
                        <button type="submit" name="delete_tomato" class="btn btn-danger" >Delete</button>
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




<?php
    include('includes/admin-header.php');
    include('includes/admin-nav.php');
     include('includes/leftnav.php');
?>




<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>          </div>

          <h2>Title Here</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Cost</th>
                  <th>Teacher</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php       
  
  $sql = "SELECT * FROM tbl_tutorials";
 
       $result = mysqli_query($conn, $sql);
      
       if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          ?>
            
              <tr>
                  <td scope="col"> <?php  echo $row["id"]?> </td>
                  <td><?php  echo $row["name"]?></td>
                  <td><?php  echo $row["cost"]?></td>
                  <td><?php  echo $row["teacher"]?></td>
                  
                  <td>
                  <form class="" action="delete.php" method="post">
             
             <input name="submit_btn" id="" type="submit" id="signup_btn" class="btn btn-sm btn-success" value="Delete"/>
                <input type="hidden" name="id" value=<?= $row['id']; ?>>
               
         </form>
         <br>
         <form class="" action="updateform.php" umethod="post">
             
             <input name="submit_btn" id="" type="submit" id="signup_btn" class="btn btn-sm btn-success" value="update"/>
                <input type="hidden" name="id" value=<?= $row['id']; ?>>
               
         </form>
         
                  </td>
                
               
              </tr>
            
          <?php 
         
  }
      }
      else{
        print "No Data Found ";
      }
      ?>
              </tbody>
            </table>
          </div>
        </main>



  
  <?php
  include('includes/admin-footer.php')
?> 
 
      
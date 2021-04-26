<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'Includes/header.php';?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'Includes/sidebar.php';?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include 'Includes/topmenu.php';?>
        <!-- Topbar -->
        <?php include 'Includes/bcaConn.php';?>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
           <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Admin Table</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Sr.No</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          include 'Includes/bcaConn.php';
                          include 'Includes/pass.php';
                          $sql="select * from admin ORDER BY id DESC";
                          $result=$con->query($sql);
                          if($result->num_rows>0)
                          {
                            $no=0;
                              while($row=$result->fetch_assoc())
                              {
                              $no++;              
                      ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['lastname'];?></td>
                          <td><?php echo $row['username'];?></td>
                          <td><?php echo decrypt($row['passwd'],$key);?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['contact'];?></td>
                          <td><button class="btn btn-outline-success" onClick="edit(<?php echo $row['id'];?>)">Edit</button></td>
                          <td><button class="btn btn-outline-danger" onClick="deleteme(<?php echo $row['id'];?>)">Delete</button></td>
                        </tr>
                         <script language="javascript">
                           function deleteme(delid)
                           {
                             if(confirm("Do you want Delete!")){
                             window.location.href='Includes/deletebcaadmin.php?varname=' +delid+'';
                             return true;
                             }
                           } 
                           function edit(delid)
                           {
                             if(confirm("Do you want Edit!")){
                             window.location.href='editadmin.php?varname=' +delid+'';
                             return true;
                             }
                           } 
                         </script>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
        <!---Container Fluid-->
      </div>
     <?php include 'Includes/footer.php';?>
    </div>
  </div>
 <?php include 'Includes/script.php';?>
</body>

</html>
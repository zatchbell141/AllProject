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
       <?php include 'Includes/displaydata.php';?>
       <?php include 'Includes/pass.php';?>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
           <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Admin Data</h6>
                </div>
                <form action="editadmin.php" method="post" autocomplete="off">
                  <table class="table table-striped table-bordered">
                    <tr>
                      <td>ID:<input type="text" name="txtid" value="<?php echo $admrow['id']?>" class="form-control" readonly></td>
                      <td>Name:<input type="text" name="txtname" value="<?php echo $admrow['name']?>" class="form-control" required></td>
                      <td>Lastname:<input type="text" name="txtlastname" value="<?php echo $admrow['lastname']?>" class="form-control" required></td>
                    </tr>
                    <tr>
                      <td>Username:<input type="text" name="txtusername" value="<?php echo $admrow['username']?>" class="form-control" required></td>
                      <td>Password:<input type="text" name="txtpasswd" value="<?php echo decrypt($admrow['passwd'],$key);?>" class="form-control" required></td>
                       <td>Email:<input type="text" name="txtemail" value="<?php echo $admrow['email']?>" class="form-control" required></td>
                    </tr>
                    <tr>
                       <td colspan="3">Contact No:<input type="text" name="txtcontact" value="<?php echo $admrow['contact']?>" class="form-control" required></td>
                    </tr>
                    <tr>
                      <td colspan="3"><input type="submit" name="btneditadmin" class="btn btn-outline-primary" value="Update data"></td>
                      </form>
                    </tr>
                    <tr>
                      <td colspan="3"><?php include 'Includes/updateadmindata.php';?></td>
                    </tr>
                  </table>
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
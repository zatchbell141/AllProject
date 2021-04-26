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
       
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
           <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Admission Year Data</h6>
                </div>
                <form action="editadmissionyrs.php" method="post" autocomplete="off">
                  <table class="table table-striped table-bordered">
                    <tr>
                      <td>ID:<input type="text" name="txtid" value="<?php echo $admyrsrow['id']?>" class="form-control" readonly></td>
                      <td>Name:<input type="text" name="txtname" value="<?php echo $admyrsrow['name']?>" class="form-control" required></td>
                    </tr>
                    <tr>
                      <td colspan="3"><input type="submit" name="btneditadmissionyrs" class="btn btn-outline-primary" value="Update data"></td>
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
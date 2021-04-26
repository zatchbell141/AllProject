<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'Includes/header.php';?>
</head>
<?php require'Includes/bcaConn.php' ?>
<?php
session_start();
if(!isset($_SESSION['admin_id'])){
  header("Location: adminlogin.php");
}
?>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'Includes/adminsidebar.php';?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include 'Includes/admintopmenu.php';?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
             <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Settings</h6>
                </div>
                <div class="table-responsive p-3">

                  <form class="form-inline">
                  <div class="form-group">Change Password:&emsp;<input class="form-control" type="password" name="password" placeholder="New Password"></div>
                  <input class="btn btn-success" type="submit" name="change_password" value="Change Password">
                </form>
                <br><hr>
                <form class="form-inline">
                  <div class="form-group">Add new role:&emsp;<input class="form-control" type="text" name="username" placeholder="Name"></div>
                  <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                  <div class="form-group"><select class="form-control" name="role"><option>Admin</option><option>Instructor</option></select></div>
                  <input class="btn btn-success" type="submit" name="add_role" value="Save" >
                </form>
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
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
<?php

//new-test
  /*if(isset($_POST['add_test'])){
    $test_name = $_POST['test_name'];
    $subject = $_POST['subject'];
    $sdatetime = $_POST['sdatetime'];
    $edatetime = $_POST['edatetime'];
    $test_duration = $_POST['test_duration'];
    $attempts = $_POST['attempts'];
    $yes_no = $_POST['yes_no'];
    $add_test = " INSERT INTO test(subject, test_name, sdatetime, edatetime, test_duration, attempts, yes_no) VALUES('$subject','$test_name','$sdatetime','$edatetime','$test_duration','$attempts','$yes_no') ";
    $con->query($searchusers);
    header("Location: adminHome.php");

  
  }*/
  //search-users
$searchusers = 'SELECT * FROM users order by user_id desc';
$usernames_result = $con->query($searchusers);
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
                  <h6 class="m-0 font-weight-bold text-primary">Search Test</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Sr No</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>View Test Results</th>
                      <th>Delete User</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($usernames_result as $username) : ?>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $username['username']; ?></td>
                        <td><?php echo $username['email']; ?></td>
                        <td><a class="btn btn-info" href='viewProfile.php?user_id= <?php echo $username['user_id']; ?> ' >View Results<a></td>
                        <td><a href='deleteUser.php?user_id= <?php echo $username['user_id']; ?> ' class="btn btn-danger">Delete User</a></td>
                      </tr>
                      <?php $i++; endforeach; ?>
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
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
    $subjects ="SELECT * FROM subjects";
    $subjects_result = $con->query($subjects); 
//new-test
  if(isset($_POST['add_test'])){
    $test_name = $_POST['test_name'];
    $subject = $_POST['subject'];
    $sdatetime = $_POST['sdatetime'];
    $edatetime = $_POST['edatetime'];
    $test_duration = $_POST['test_duration'];
    $attempts = $_POST['attempts'];
    $yes_no = $_POST['yes_no'];
    $add_test = " INSERT INTO test(subject, test_name, sdatetime, edatetime, test_duration, attempts, yes_no) VALUES('$subject','$test_name','$sdatetime','$edatetime','$test_duration','$attempts','$yes_no') ";
    $con->query($add_test);
    header("Location: addsubject.php");

  
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
                  <h6 class="m-0 font-weight-bold text-primary">Add Test</h6>
                </div>
                <div class="table-responsive p-3">
                  <form method="post" action="">
    <div class="form-group">
      <input class="form-control" type="text" name="test_name" placeholder="Test Name" style="width: 300px;">
    </div>
    <div class="form-group">
        <select name="subject" class="form-control" id="sel1" style="width: 300px;">
          <option disabled>Select Subject</option>
          <?php foreach($subjects_result as $subject) : ?>
              <option value="<?php echo $subject['subject']; ?>"><?php echo $subject['subject']; ?></option>
            <?php endforeach; ?>
          </select>
      </div>
      <div class="form-inline form-group">
      <input class="form-control" type="datetime-local" name="sdatetime" style="width: 300px;">
      Start Date and Time
    </div>
    <div class="form-inline form-group">
      <input class="form-control" type="datetime-local" name="edatetime" style="width: 300px;">
      End Date and Time
    </div>
    <div class="form-group">
      <input class="form-control" type="number" name="test_duration" placeholder="Duration in Minutes" style="width: 300px;">
    </div>
    <div class="form-group">
      <input class="form-control" type="number" name="attempts" placeholder="No of attempts allowed" style="width: 300px;">
    </div>
    <div class="form-group">
        <select name="yes_no" class="form-control" id="sel1" style="width: 300px;">
          <option disabled>Show Immediate Results</option>
          <option>Yes</option>
          <option>No</option>
        </select>
      </div>
        <br>
    <input type="submit" name="add_test" value="Create Test" class="btn btn-danger" style="height: 40px; width:300px;">
</form>
<p>* Note: After creating test go to Tests to add questions.</p>
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
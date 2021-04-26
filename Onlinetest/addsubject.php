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
//subjects
$subjects = "SELECT * FROM subjects";
$subjects_result=$con->query($subjects);


  if(isset($_POST['add_subject'])){
    $subject = $_POST['subject'];
    $add_subject = "INSERT INTO subjects(subject) VALUES('$subject')";
    $con->query($add_subject);
    header("Location: addsubject.php");
  }

//tests
$tests="SELECT * FROM test order by test_id desc";
$tests_result =$con->query($tests);

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

//search-users
$searchusers = "SELECT * FROM users";
$usernames_result = $con->query($searchusers);

//settings

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
                  <h6 class="m-0 font-weight-bold text-primary">Add Subject</h6>
                </div>
                <div class="table-responsive p-3">
                   <h3>Subjects</h3><br><br>
                      <ul class="list-group">
                      <?php foreach($subjects_result as $subject) : ?>
                        <li class="list-group-item"><?php echo $subject['subject']; ?></li>
                      <?php endforeach; ?>
                      </ul>
                      <br><br><br><br>
                      <form method="post" action="">
                        <input class="form-control" type="text" name="subject" placeholder="Add New Subject"><br>
                        <input type="submit" name="add_subject" value="Add" class="btn btn-danger btn-block">
                      </form>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Test</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table table-striped">
        <thead>
            <tr>
                <th>Test Name</th>
                <th>Subject</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Add Questions</th>
                <!-- <th>Evaluate Test</th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tests_result as $test): ?>
                    <tr>
                        <td><?php echo $test['test_name'];?></td>
                        <td><?php echo $test['subject']; ?></td>
                        <td><?php echo $test['sdatetime']; ?></td>
                        <td><?php echo $test['edatetime']; ?></td>
                        <td><a href='editTest.php?var=<?php echo $test['test_id']; ?> ' class="btn btn-primary">Add Question</a></td>
                        <!-- <td><a href='evaluateTest.php?var=<?php echo $test['test_id']; ?> ' class="btn btn-info">Evaluate</a></td> -->
                    </tr>
            <?php endforeach; ?>

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
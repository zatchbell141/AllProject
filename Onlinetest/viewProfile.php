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
$user_id = $_GET['user_id'];
$query ="SELECT * FROM test_result WHERE user_id='$user_id' ";
/*$results = mysqli_fetch_all($query, MYSQLI_ASSOC);*/
$result=$con->query($query);
$row=$result->fetch_assoc();

$query_test = "SELECT test_id,test_name,subject FROM test ";
$results_test = $con->query($query_test);
$row_test=$results_test->fetch_assoc();

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
                  <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <div class="table-responsive p-3">
                   <table class="table table-striped">
        <thead>
          <tr>
            <th>Sr No.</th>
            <th>Subject</th>
            <th>Test Name</th>
            <th>Total Questions</th>
            <th>Correct Answers</th>
            <th>Wrong Answers</th>
            <th>Not Attempted</th>
            <th>Score</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $res): ?>
          <tr>
            <td>1</td>
            <?php foreach ($results_test as $result_test): ?>
              <?php if($res['test_id']==$result_test['test_id']){
                  echo '<td>'.$result_test['subject'].'</td>';
                  echo '<td>'.$result_test['test_name'].'</td>';
                }
              ?>
            <?php endforeach; ?>
            <td><?php echo ($res['right_ans']+$res['wrong_ans']+$res['no_attempt']); ?></td>
            <td><?php echo $res['right_ans']; ?></td>
            <td><?php echo $res['wrong_ans']; ?></td>
            <td><?php echo $res['no_attempt']; ?></td>
            <td><?php echo number_format((float) $res['score'],2, '.', '').' %'; ?></td>
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
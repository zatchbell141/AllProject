<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'Includes/header.php';?>
</head>
<?php require'Includes/bcaConn.php' ?>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("Location: index.php");
}
$user_id = $_SESSION['user_id'];

$query_user = "SELECT username, email FROM users WHERE user_id='$user_id'";
$results_user = $con->query($query_user);
$row=$results_user->fetch_assoc();

$query = "SELECT * FROM test_result WHERE user_id='$user_id' ";
$results_testresult = $con->query($query);
$row_testresult=$results_testresult->fetch_assoc();

$query_test = "SELECT test_id,test_name,subject FROM test ";
$results_test = $con->query($query_test);
/*$row_test=$results_test->fetch_assoc();*/
?>
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

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Student Profile</h6>
                </div>
                 <h2>Name: <?php echo $row['username'];?></h2>
                 <h2>Email: <?php echo $row['email'];?></h2><br>
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
          <?php $i=1; foreach ($results_testresult as $res): ?>
          <tr>
            <td><?php echo $i; ?></td>
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
        <?php $i++; endforeach; ?>
        </tbody>
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
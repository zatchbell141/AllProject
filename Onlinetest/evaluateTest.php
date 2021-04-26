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
  $test_id=$_GET['var'];
  $q_query="SELECT * FROM questions WHERE test_id='$test_id'";
  $q_result=$con->query($q_query);
  $q_row=$q_result->fetch_assoc();

  /*function fetch($var){
    $question_id=$var;
    global $conn, $test_id;
    $a_query="SELECT * FROM test_result WHERE test_id='$test_id' AND question_id='$question_id'   ";
    $a_result=$con->query($a_query);
    $a_row=$a_result->fetch_assoc();
    return $a_row;
  }
  if(isset($_POST['eval_test'])){
    $question_id=$_POST['question_id'];
    $a_query="SELECT * FROM test_result_desc WHERE test_id='$test_id' AND question_id='$question_id' ";
    $a_result=$con->query($a_query);
    $a_row=$a_result->fetch_assoc();

    foreach($a_row as $a_res){
      $result_id = $a_res['result_id'];
      $marks = $_POST[$a_res['result_id']];
      $update_desc="UPDATE test_result_desc SET marks='$marks' WHERE result_id='$result_id' AND question_id='$question_id' AND test_id='$test_id' " ;
      $con->query($update_desc);
    }
  }*/
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
                  <h6 class="m-0 font-weight-bold text-primary">Evaluate Test</h6>
                </div>
                <div class="table-responsive p-3">
                  <!--  <?php foreach($q_row as $q_res): ?>
        <h1><?php echo $q_res['question']; ?></h1><br>
        <form action="" method="post">
            <?php $a_result=fetch($q_res['question_id']) ?>
              <input  hidden='hidden' name='question_id' value=<?php echo $q_res['question_id']; ?> ><br>
            <?php foreach($a_result as $a_res): ?>
              <?php echo '<pre>'.$a_res['answer'].'</pre>'; ?>
              <input class="form-control" type="number" name=<?php echo $a_res['result_id'];?> value=<?php echo $a_res['marks'];?> placeholder="Marks"><br>
            <?php endforeach; ?>
          <input type="submit" name="eval_test" class="btn btn-success btn-block" value="Save Valuation">
        </form>
      <?php endforeach; ?> -->
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
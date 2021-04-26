<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'Includes/header.php';?>
</head>
<?php include 'Includes/bcaConn.php' ?>
<?php
session_start();
  if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
  }
  if(!isset($_SESSION['test_id'])){
    header("Location: studentHome.php");
  }
  $user_id=$_SESSION['user_id'];
  $right=0;
  $wrong=0;
  $no_attempt=0;
  $test_id=$_SESSION['test_id'];

  $query="SELECT * FROM questions WHERE test_id='$test_id' ";
  $result=$con->query($query);
  if(isset($_POST['submitTest'])){
    foreach ($result as $res) {
      if($_POST[$res['question_id']]==$res['answer']){
        $right++;
      }else if($_POST[$res['question_id']]=='none'){
        $no_attempt++;
      }else{
        $wrong++;
      }
    }
    $total=$right+$wrong+$no_attempt;
     $score=($right*100)/($total);

      $sqltest="INSERT INTO test_result(test_id, user_id, right_ans, wrong_ans, no_attempt, score) VALUES('$test_id','$user_id','$right','$wrong','$no_attempt','$score')";
      $con->query($sqltest);
     
    }
 
 /* unset($_SESSION["test_id"]);*/
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
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Test Results</h6>
                </div>
                <div class="table-responsive p-3">


         
          <table class="table">
            <thead>
              <tr>
                <th>Total Questions</th>
                <th>Correct Answers</th>
                <th>Wrong Answers</th>
                <th>Not Attempted</th>
                <th>Score</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h1><?php echo $total; ?></h1></td>
                <td><h1><?php echo $right; ?></h1></td>
                <td><h1><?php echo $wrong; ?></h1></td>
                <td><h1><?php echo $no_attempt; ?></h1></td>
                <td><h1><?php echo number_format((float) $score,2, '.', '').' %'; ?></h1></td>
              </tr>
            </tbody>
          </table>
            </div>
          </div>
        </div>

           <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Question And Answer</h6>
                </div>
                <div class="table-responsive p-3">
                   <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Sr.No</th>
                        <th>Question</th>
                        <th>Answers</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                           include 'Includes/bcaConn.php';
                          $test_id=$_SESSION['test_id'];
                          $sql="select * from questions where test_id='$test_id'";
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
                          <td><?php echo $row['question']?></td>
                          <td><?php $ans=$row['answer'];
                            if($ans=='a')
                            {
                              echo $row['option_a'];
                            }
                            if($ans=='b')
                            {
                              echo $row['option_b'];
                            }
                            if($ans=='c')
                            {
                              echo $row['option_c'];
                            }
                            if($ans=='d')
                            {
                              echo $row['option_d'];
                            }
                          ?></td>
                        </tr>
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
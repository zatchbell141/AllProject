<?php require'database.php' ?>
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
  $query=mysqli_query($conn,"SELECT * FROM questions WHERE test_id='$test_id' ");
  $result=mysqli_fetch_all($query, MYSQLI_ASSOC);
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
    mysqli_query($conn,"INSERT INTO test_result(test_id, user_id, right_ans, wrong_ans, no_attempt, score) VALUES('$test_id','$user_id','$right','$wrong','$no_attempt','$score')" );
    $temp_query=mysqli_query($conn,"SELECT * FROM test_result ORDER BY result_id DESC LIMIT 1");
    $temp_result=mysqli_fetch_array($temp_query, MYSQLI_ASSOC);
    $result_id=$temp_result['result_id'];
    $query_desc=mysqli_query($conn,"SELECT * FROM questions_desc WHERE test_id='$test_id' ");
    $result_desc=mysqli_fetch_all($query_desc, MYSQLI_ASSOC);
    foreach ($result_desc as $res_desc) {
      $q_id=$res_desc['question_id'];
      $temp=$_POST[$res_desc['question_id']];
      $ans=mysqli_real_escape_string($conn,$temp);
      mysqli_query($conn,"INSERT INTO test_result_desc(result_id, question_id, user_id, test_id, answer) VALUES('$result_id','$q_id', '$user_id', '$test_id', '$ans' )");
    }
  }
  unset($_SESSION["test_id"]);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yash Infotech</title>
      
  
  
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Yash Infotech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="studentProfile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top:50px;">
      <h3 style="float:right;"><a  href="studentHome.php">Back to Dashboard</a></h3>
      <h1>Test Results</h1>
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
      </table><br><br>
      <center><h3>Results for the descriptive type questions will be evaluated and displayed later!!!</h3></center>
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Yash Infotech 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
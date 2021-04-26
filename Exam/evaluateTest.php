<?php require'database.php' ?>
<?php
  $test_id=$_GET['var'];
  $q_query=mysqli_query($conn,"SELECT * FROM questions_desc WHERE test_id='$test_id'");
  $q_result=mysqli_fetch_all($q_query, MYSQLI_ASSOC);
  function fetch($var){
    $question_id=$var;
    global $conn, $test_id;
    $a_query=mysqli_query($conn,"SELECT * FROM test_result_desc WHERE test_id='$test_id' AND question_id='$question_id'   ");
    $a_result=mysqli_fetch_all($a_query, MYSQLI_ASSOC);
    return $a_result;
  }
  if(isset($_POST['eval_test'])){
    $question_id=$_POST['question_id'];
    $a_query=mysqli_query($conn,"SELECT * FROM test_result_desc WHERE test_id='$test_id' AND question_id='$question_id' ");
    $a_result=mysqli_fetch_all($a_query, MYSQLI_ASSOC);
    foreach($a_result as $a_res){
      $result_id = $a_res['result_id'];
      $marks = $_POST[$a_res['result_id']];
      mysqli_query($conn,"UPDATE test_result_desc SET marks='$marks' WHERE result_id='$result_id' AND question_id='$question_id' AND test_id='$test_id' " );
    }
  }
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
    <script type="text/javascript" src="js/searchUser.js"></script>
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
              <a class="nav-link" href="index.php">Subject
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
             <li class="nav-item">
              <a class="nav-link" href="newtest.php">New Test</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="searchusers.php">Search Users</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="setting.php">Setting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
    <div class="container">
      <?php foreach($q_result as $q_res): ?>
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
      <?php endforeach; ?>
      <br><br><br>
    </div>
</div>
    <!-- /.container -->

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
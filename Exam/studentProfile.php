<?php require'database.php' ?>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("Location: index.php");
}
$user_id = $_SESSION['user_id'];
$query_user = mysqli_query($conn,"SELECT username, email FROM users WHERE user_id='$user_id' ");
$results_user = mysqli_fetch_array($query_user, MYSQLI_ASSOC);
$query = mysqli_query($conn,"SELECT * FROM test_result WHERE user_id='$user_id' ");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
$query_test = mysqli_query($conn,"SELECT test_id,test_name,subject FROM test ");
$results_test = mysqli_fetch_all($query_test, MYSQLI_ASSOC);
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
               
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="studentProfile.php">Profile
              <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <br>
      <h2>Name: <?php echo $results_user['username'];?></h2>
      <h2>Email: <?php echo $results_user['email'];?></h2><br>
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
            <th>Descriptive Questions Score</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; foreach ($results as $res): ?>
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
            <?php $result_id=$res['result_id'];
            $marks_q=mysqli_query($conn,"SELECT SUM(marks) FROM test_result_desc WHERE result_id='$result_id' ");
            while($row = mysqli_fetch_array($marks_q)){
              $marks= $row['SUM(marks)'];
            }
            ?>
            <td><?php echo $marks; ?></td>
          </tr>
        <?php $i++; endforeach; ?>
        </tbody>
      </table>
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
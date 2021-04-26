<?php require'database.php' ?>
<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['admin_id'])){
	header("Location: adminHome.php");
}
$user_id = $_GET['user_id'];
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
              <a class="nav-link" href="new-test.php">New Test</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="searchusers.php">Search Users</a>
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
   
        <br>
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
					<?php foreach ($results as $res): ?>
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
		<br><br><br><br>
		<br><br><br><br>
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

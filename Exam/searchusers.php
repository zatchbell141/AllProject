<?php require'database.php' ?>
<?php
session_start();
if(!isset($_SESSION['admin_id'])){
  header("Location: admin.php");
}
?>
<?php

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
    mysqli_query($conn,$add_test);
    header("Location: adminHome.php");

  
  }
  //search-users
$searchusers_result = mysqli_query($conn,'SELECT * FROM users');
$usernames = mysqli_fetch_all($searchusers_result, MYSQLI_ASSOC);
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
              <a class="nav-link" href="adminHome.php">Subject
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
    <div class="row">
      <div class="col-sm-5">
        <br>
    <h3>User Details</h3>
    <!--<div class="search-box">
        <form class="form-inline" style="padding:0;">
            <input class="form-control" type="text" autocomplete="off" placeholder="Search users..." style="width:720px;" />
            <input type="submit" name="search_user" value="Search" class="btn btn-info" style="width:150px;">
            <div class="result-display" style="cursor: pointer;"></div>
        </form>
    </div>-->
    <br>
			<table class="table">
				<thead>
					<tr>
						<th>Sr No</th>
						<th>Username</th>
						<th>Email</th>
						<th>View Test Results</th>
						<th>Delete User</th>
					</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach($usernames as $username) : ?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $username['username']; ?></td>
							<td><?php echo $username['email']; ?></td>
							<td><a class="btn btn-info" href='viewProfile.php?user_id= <?php echo $username['user_id']; ?> ' >View Results<a></td>
							<td><a href='deleteUser.php?user_id= <?php echo $username['user_id']; ?> ' class="btn btn-danger">Delete User</a></td>
						</tr>
						<?php $i++; endforeach; ?>
					</tbody>
        </table>
  </div>
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

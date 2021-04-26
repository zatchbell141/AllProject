<?php require'database.php' ?>
<?php
session_start();
if(!isset($_SESSION['admin_id'])){
  header("Location: admin.php");
}
?>
<?php
//subjects
$subjects_result = mysqli_query($conn,'SELECT * FROM subjects');
$subjects = mysqli_fetch_all($subjects_result, MYSQLI_ASSOC);
  if(isset($_POST['add_subject'])){
    $subject = $_POST['subject'];
    $add_subject = "INSERT INTO subjects(subject) VALUES('$subject')";
    mysqli_query($conn,$add_subject);
    header("Location: adminHome.php");
  }

//tests
$tests_result = mysqli_query($conn,'SELECT * FROM test');
$tests = mysqli_fetch_all($tests_result, MYSQLI_ASSOC);

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

//settings

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
      <br>
    <div class="col-sm-4">
      <br>
        <h3>Subjects</h3><br><br>
  <ul class="list-group">
  <?php foreach($subjects as $subject) : ?>
    <li class="list-group-item"><?php echo $subject['subject']; ?></li>
  <?php endforeach; ?>
  </ul>
  <br><br><br><br>
  <form method="post" action="">
    <input class="form-control" type="text" name="subject" placeholder="Add New Subject"><br>
    <input type="submit" name="add_subject" value="Add" class="btn btn-danger btn-block">
  </form>
  <br>
  <br>
</div>

<div class="col-sm-4">
  <br>
  <h3>Tests</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Test Name</th>
                <th>Subject</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Add Questions</th>
                <th>Evaluate Test</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tests as $test): ?>
                    <tr>
                        <td><?php echo $test['test_name'];?></td>
                        <td><?php echo $test['subject']; ?></td>
                        <td><?php echo $test['sdatetime']; ?></td>
                        <td><?php echo $test['edatetime']; ?></td>
                        <td><a href='editTest.php?var=<?php echo $test['test_id']; ?> ' class="btn btn-primary">Add Question</a></td>
                        <td><a href='evaluateTest.php?var=<?php echo $test['test_id']; ?> ' class="btn btn-info">Evaluate</a></td>
                    </tr>
            <?php endforeach; ?>

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

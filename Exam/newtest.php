<?php require'database.php' ?>
<?php
session_start();
if(!isset($_SESSION['admin_id'])){
  header("Location: admin.php");
}
?>
<?php
    $subjects_result = mysqli_query($conn,'SELECT * FROM subjects');
    $subjects = mysqli_fetch_all($subjects_result, MYSQLI_ASSOC); 
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
              <a class="nav-link" href="new-test.php">New Test</a>
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
    <h3>Create Test</h3></div></div>
    <br>
<form method="post" action="">
    <div class="form-group">
      <input class="form-control" type="text" name="test_name" placeholder="Test Name" style="width: 300px;">
    </div>
    <div class="form-group">
        <select name="subject" class="form-control" id="sel1" style="width: 300px;">
          <option disabled>Select Subject</option>
          <?php foreach($subjects as $subject) : ?>
              <option value="<?php echo $subject['subject']; ?>"><?php echo $subject['subject']; ?></option>
            <?php endforeach; ?>
          </select>
      </div>
      <div class="form-inline form-group">
      <input class="form-control" type="datetime-local" name="sdatetime" style="width: 300px;">
      Start Date and Time
    </div>
    <div class="form-inline form-group">
      <input class="form-control" type="datetime-local" name="edatetime" style="width: 300px;">
      End Date and Time
    </div>
    <div class="form-group">
      <input class="form-control" type="number" name="test_duration" placeholder="Duration in Minutes" style="width: 300px;">
    </div>
    <div class="form-group">
      <input class="form-control" type="number" name="attempts" placeholder="No of attempts allowed" style="width: 300px;">
    </div>
    <div class="form-group">
        <select name="yes_no" class="form-control" id="sel1" style="width: 300px;">
          <option disabled>Show Immediate Results</option>
          <option>Yes</option>
          <option>No</option>
        </select>
      </div>
        <br>
    <input type="submit" name="add_test" value="Create Test" class="btn btn-danger" style="height: 40px; width:300px;">
</form>
<p>* Note: After creating test go to Tests to add questions.</p>
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

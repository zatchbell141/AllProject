<?php require'database.php' ?>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("Location: index.php");
}
$query = mysqli_query($conn,"SELECT * FROM test");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
    <div class="container">
      <br>
      <h1 style="color: red;">TESTS</h1>
      <div class="row my-4">
        <div class="col-lg-7">
          <div id="active_test" class="well">
            <h3>Active Tests</h3>
            <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Test Name</th>
                      <th>Subject</th>
                      <th>Ends on</th>
                      <th>Start Test</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($results as $result):
                    if((strtotime($result['sdatetime']) <= strtotime(date("Y-m-d h:i:sa")))  && (strtotime($result['edatetime']) > strtotime(date("Y-m-d h:i:sa")))  ){ ?>
                          <tr>
                            <td><?php echo $result['test_name'];?></td>
                            <td><?php echo $result['subject']; ?></td>
                            <td><?php echo $result['edatetime']; ?></td>
                            <td><a href="solveTest.php?var=<?php echo $result['test_id'];?>" class="btn btn-primary">Start Test</a></td>
                          </tr>
                    <?php } ?>
                  <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
          <div id="active_test" class="well">
            <h3>Upcoming Tests</h3>
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Test Name</th>
                      <th>Subject</th>
                      <th>Starts on</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($results as $result):
                    if(strtotime($result['sdatetime']) > strtotime(date("Y-m-d h:i:sa"))){ ?>
                          <tr>
                            <td><?php echo $result['test_name'];?></td>
                            <td><?php echo $result['subject']; ?></td>
                            <td><?php echo $result['sdatetime']; ?></td>
                          </tr>
                    <?php } ?>
                  <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-lg-5">
          <div id="active_test" class="well">
            <h3>Past Tests</h3>
            <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Test Name</th>
                      <th>Subject</th>
                      <th>Ended on</th>
                      <th>Check Results</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($results as $result):
                    if((strtotime($result['edatetime']) < strtotime(date("Y-m-d h:i:sa")))){ ?>
                          <tr>
                            <td><?php echo $result['test_name'];?></td>
                            <td><?php echo $result['subject']; ?></td>
                            <td><?php echo $result['edatetime']; ?></td>
                            <td><a href="" class="btn btn-primary">Summary</a></td>
                          </tr>
                    <?php } ?>
                  <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
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
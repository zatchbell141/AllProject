
<?php require'database.php' ?>
<?php
session_start();
if(isset($_SESSION['user_id'])){
  header("Location: studentHome.php");
}
if(isset($_POST['signin'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $res=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
  $row = mysqli_fetch_array($res);
  $count = mysqli_num_rows($res);
    if($count == 1 && $row['password']==MD5($password)){
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        header("Location: studentHome.php");
  }else{
        $errMSG = "Incorrect Credentials, Try again...";
    }
}
if(isset($_POST['signup'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $conf_password = mysqli_real_escape_string($conn,$_POST['conf_password']);
        $res=mysqli_query($conn,"SELECT email FROM users WHERE email='$email'");
        $count = mysqli_num_rows($res);
        if($count==1){
            $errMSG = "email already exist";
        }
        elseif($password==$conf_password){
        $query = "INSERT INTO users(username, email, password) VALUES('$username','$email',MD5('$password'))";
                if(mysqli_query($conn, $query)){
                    $errMSG = "Registered Successfully!";
                } else {
                    echo 'ERROR: '. mysqli_error($conn);
                }
        }
        else{
            $errMSG = "passwords doesn't match";
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

    <!-- Page Content -->
    <div class="container">
          <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="Image/exam.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-6">
          <h1>Welcome to Online Examination Portal of Yash Infotech</h1>
          <p>&nbsp;</p>
           
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

     
         <h2>Users</h2>
  <p>For login or sign up.If you can't find your login id please sign up and report to your Administrator</p>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" class="btn btn-primary">Login</a></li>
    <li><a data-toggle="tab" href="" >&nbsp;</a></li>
    <li><a data-toggle="tab" href="" >&nbsp;</a></li>
    <li><a data-toggle="tab" href="" >&nbsp;</a></li>
    <li><a data-toggle="tab" href="#menu1" class="btn btn-warning">Sign Up</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
      <div class="col-md-4">
        <h3>Login</h3>
     <form action="index.php" method="post" style="padding-left:20px; padding-right:20px"><br><br>
                      <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div><br>
                      <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div><br><br>
                      <div class="form-group"><input class="form-control" type="submit" name="signin" value="Sign In"></div>
                    </form>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class='container'>
      <h3>Sign Up</h3>
      <form action="index.php" method="post"><br><br>
                      <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div><br>
                      <div class="form-group"><input class="form-control" type="email" name="email" placeholder="E-mail" required></div><br>
                      <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div><br>
                      <div class="form-group"><input class="form-control" type="password" name="conf_password" placeholder="Confirm Password" required></div><br>
                      <div class="form-group"><input class="btn-primary" type="submit" name="signup" value="Sign Up"></div>
                    </form>
                    <br><center><span><?php if(isset($errMSG)){echo $errMSG;}?></span><center>
    </div>
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

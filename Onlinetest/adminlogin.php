<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Yash Infotech</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" method="POST" autocomplete="off" action="adminlogin.php">
                    <div class="form-group">
                      <input type="email" name="username" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <!-- <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div> -->
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-block" value="Login" name="signin">
                    </div>
                   <!--  <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                   <!--  <a class="font-weight-bold small" href="register.php">Create an Account!</a> -->
                  </div>
                  <div class="text-center">
                  </div>
                 <?php
                 include 'Includes/bcaConn.php';
                    if(isset($_POST['signin'])){
                      $username =  $_POST['username'];
                      $password = $_POST['password'];
                      $res=mysqli_query($con,"SELECT * FROM admin_users WHERE username='$username'");
                      $row = mysqli_fetch_array($res);
                      $count = mysqli_num_rows($res);
                        if($count == 1 && $row['password']==$password){
                            session_start();
                            $_SESSION['admin_id'] = $row['user_id'];
                            $_SESSION['admin_name'] = $row['username'];
                            header("Location: adminindex.php");
                      }else{
                            echo "Incorrect Credentials, Try again...";
                        }
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
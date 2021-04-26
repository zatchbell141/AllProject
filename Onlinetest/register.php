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
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form action="register.php" method="post">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" id="exampleInputLastName" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input type="password" class="form-control" name="conf_password" id="exampleInputPasswordRepeat"
                        placeholder="Repeat Password">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="signup" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <hr>
                    <!-- <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Register with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="login.php">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                  <?php
                    require'Includes/bcaConn.php';
                    if(isset($_POST['signup'])){
                      $username = mysqli_real_escape_string($con, $_POST['username']);
                      $email = mysqli_real_escape_string($con, $_POST['email']);
                      $password = mysqli_real_escape_string($con,$_POST['password']);
                      $conf_password = mysqli_real_escape_string($con,$_POST['conf_password']);
                      $res=mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
                      $count = mysqli_num_rows($res);
                      if($count==1){
                          $errMSG = "email already exist";
                      }
                      elseif($password==$conf_password){
                      $query = "INSERT INTO users(username, email, password) VALUES('$username','$email',MD5('$password'))";
                             if($con->query($query)==true)
                              {

                                  echo ' <div class="alert alert-success">
                                      <b>Register Successfully..!!</b></div>';
                              }
                              else
                              {
                                  echo '<div class="alert alert-danger">
                                      <b>Failed to add</b></div>';
                              }
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
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
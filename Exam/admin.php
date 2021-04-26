<?php require'database.php' ?>
<?php
if(isset($_POST['signin'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $res=mysqli_query($conn,"SELECT * FROM admin_users WHERE username='$username'");
  $row = mysqli_fetch_array($res);
  $count = mysqli_num_rows($res);
    if($count == 1 && $row['password']==$password){
        session_start();
        $_SESSION['admin_id'] = $row['user_id'];
        header("Location: adminHome.php");
  }else{
        $errMSG = "Incorrect Credentials, Try again...";
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

   
    <div class="container">
          <!-- Heading Row -->
      <div class="row my-4">
           <div class="login">
                <ul class="nav nav-pills nav-justified">
                  <li class="active"><a style="color:red;">Administrator Sign In</a></li>
                </ul>
                    <form action="" method="post" style="padding-left:20px; padding-right:20px"><br>
                      <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div><br>
                      <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div><br>                      
                      <div class="form-group"><input class="btn btn-primary" type="submit" name="signin" value="Sign In"></div>
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

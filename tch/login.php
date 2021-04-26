
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
<?php include 'Includes/loginheader.php';?>
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.php"> <h4>Yash Infotech BCA(Backoffice)</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="login.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="txtusername" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="txtpasswd" class="form-control" placeholder="Password">
                                    </div>
                                    <input type="submit" name="btnlogin" class="btn login-form__btn submit w-100" value="Sign In">
                                </form>
                              <?php
include 'Includes/Conn.php';
include 'Includes/pass.php';
if(isset($_POST['btnlogin']))
{
   session_start();
  $usernme=$_POST['txtusername'];
  $passwd=$_POST['txtpasswd'];
  $pswd=encrypt($passwd, $key);
  $sql="select id from admin where username='$usernme' and passwd='$pswd'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
  
    $_SESSION['login_user']=$usernme;
    header("location:index.php");
  }
  else
  {
    echo "Invaild username and password";
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
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>






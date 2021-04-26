<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
<?php include 'Includes/header.php';?>    
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
                                <a class="text-center" href="page-lock.php"> <h4>Yash Infotech</h4></a>
                                <form class="mt-5 mb-3 login-input" action="page-lock.php" method="POST">
                                     <div class="form-group">
                                         <input type="text" class="form-control" value="<?php echo $_SESSION['login-user']?>" required>
                                     </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <input type="submit" class="btn login-form__btn submit w-100" value="Unlock">
                                </form>
                                </div>
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
</body>
</html>






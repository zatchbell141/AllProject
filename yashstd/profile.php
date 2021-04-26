<!DOCTYPE html>
<html lang="en">
<?php include 'Online Session/Includes/session.php';?>
<head>
  <?php include 'Includes/header.php';?>
</head>

<body id="page-top">
  <div id="wrapper">
  <?php include 'Includes/sidemenu.php';?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
       <?php include 'Includes/topmenu.php';?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
          </div>

          <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <div class="card-body">
                   <form action="profile.php" method="POST">
                    <?php
                      include 'Includes/Conn.php';
                      $id=$_SESSION['login_id'];
                      $sql="select * from users where id='$id'";
                      $result=$con->query($sql);
                      $row=$result->fetch_assoc();
                    ?>
                    <div class="row">
                      <!----------Details---->
                      <div class="col-lg-6">
                        <div class="form-group">
                      <input type="text" class="form-control" name="txtfullname" 
                        placeholder="Enter Fullname" value="<?php echo $row['fullname']?>">
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail" name="txtusername" aria-describedby="emailHelp" value="<?php echo $row['username']?>" placeholder="Enter Username">
                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                      <input type="text" class="form-control" name="txtpasswd" 
                        placeholder="Enter Password" required>
                      </div>
                       
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="txtstudentID" 
                        placeholder="Enter Student ID" value="<?php echo $row['stdid']?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" class="btn btn-info" name="btnsubmit" 
                        value="Update">
                      </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                      <?php include 'updateprofile.php';?>
                    </div>
                  </div>
                    <!----------Details---->
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://yashinfotechedu.in/" target="_blank">Yash Infotech</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 <?php include 'Includes/footer.php';?>

</body>

</html>
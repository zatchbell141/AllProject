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
            <h1 class="h3 mb-0 text-gray-800">Notes</h1>
          </div>

          <div class="container-fluid" id="container-wrapper">
           <div class="row">
           <!--   <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Subject Name</h6>
                </div>
                <div class="card-body">
                      <img src="img/assignments.jpg" width="300px" height="300px">

                      <hr>
                        Upload Date:
                    </div>
                  </div>
              </div> -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Subject Name</h6>
                </div>
                <div class="card-body">
                      <img src="img/notes.png" width="300px" height="300px">

                      <hr>
                        Upload Date:
                    </div>
                  </div>
              </div>
            </div>
          </div>
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
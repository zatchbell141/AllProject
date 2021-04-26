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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="text-center">
           <!--  <img src="img/think.svg" style="max-height: 90px">
            <h4 class="pt-3">save your <b>imagination</b> here!</h4> -->
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
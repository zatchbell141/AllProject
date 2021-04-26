<!DOCTYPE html>
<html>
<head>
  <?php include 'Includes/header.php';?>
</head>
<body>
<!-- Top navbar -->
  <?php include 'Includes/topnav.php';?>
<!-- Top navbar -->

<!-- mobile top navbar -->
  <?php include 'Includes/mobilenav.php';?>
<!-- mobile top navbar -->

<!-- sidebar -->
  <?php include 'Includes/sidebar.php';?>
<!-- sidebar -->

<!-- main content -->
<div class="row main_container">
  <div class="col-md-2"></div>
  <div class="col-md-10">
  <!-- Recommended section -->    
<div class="container-fluid">
  <div class="grid_title">Videos</div>
  <div class="row">
    <div class="col-md-3 col-sx-10 p-2">
      <a href="watch.php">
        <div class="card">
          <img src="images/images.png" alt="image" height="174" />
          <div class="row">
            <div class="col-2 mt-3">
              <img id="img" width="48" src="images/images.png" class="rounded-circle">
            </div>
            <div class="col-10 mt-3">
              <p class="mb-2" title="Introduction to C Programming">Introduction to C Programming</p>
              <p style="color:#606060;">
                C Programing<i class="fas fa-check-circle"></i><br>
                
              </p>
            </div>

          </div>
        </div>
      </a>
    </div>
    
    
  </div>
</div>
  <!-- Recommended Section -->
<p><br></p>
<p><br></p>
</div>
</div>
<!-- main content -->

 <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>
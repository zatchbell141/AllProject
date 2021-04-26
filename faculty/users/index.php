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
	<div class="grid_title">Dashboard</div>
	<div class="row">

		<div class="col-md-12 col-sx-10 p-2">
					<div class="card">
					  <div class="card-body" style="background-color:white;">
					    <marquee><h3>Welcome to Faculty Support@ALC..!</h3></marquee>
					  </div>
					</div>
		</div>


			<div class="col-md-3 p-2">
				<div class="card" style="background-color:white;">
					  <img class="card-img-top" src="images/mscit_png.png" alt="Card image cap">
					  <div class="card-body" style="background-color:white;">
					    <p class="card-text">Watch MS-CIT Lecture's Videos</p>
					    <a href="videos.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
			</div>
			
	
	</div>
</div>
	
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
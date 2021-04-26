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
	<div class="grid_title">Notes</div>
	<div class="row">
		<div class="col-md-3 col-sx-10 p-2">
			<a href="topics.php">
				<div class="card" style="background-color: white;">
					<img src="images/images.png" alt="image" height="174" />
						<p class="mb-2" title="C Programming" style="font-size: 17px">C Programming</p>
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
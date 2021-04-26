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
		<div class="grid_title">Feedback</div>
		<div class="row">
			<div class="col-md-12 p-2">
				<div class="card" style="background-color:white;">
					<form>
						<input type="text" name="comment" class="input_comment" placeholder="Type Feedback....">
						<button class="btn btn-danger">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- main content -->
<p><br></p>
<p><br></p>
</div>
</div>
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
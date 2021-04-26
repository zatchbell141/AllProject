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
			<!-- content section -->		
			<div class="container-fluid">
				<div class="container-fluid pb-1 border-bottom">
				  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				    <div class="panel panel-default">
				      <div class="panel-heading" role="tab" id="headingOne">
				        <div class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				         	<svg style="height: 24px; width: 24px;" viewBox="0 0 24 24">
								  <path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z" fill="#606060"></path>
								</svg>
								<span class="accordion_btn">FILTER<?php echo $_GET['txtsearch']; ?></span>
				        </div>
				      </h4>
				      </div>
				      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				        <div class="panel-body">
				        	<div class="row">
				        		<div class="col-8">
				         <table class="table table-borderless table-sm">
							  <thead>
							    <tr>
							      <th scope="col" class="border-bottom pl-2 pr-2">UPLOAD DATE</th>
							      <th scope="col" class="border-bottom">TYPE</th>
							      <th scope="col" class="border-bottom">DURATION</th>
							      <th scope="col" class="border-bottom">FEATURES</th>
							      <th scope="col" class="border-bottom">SORT BY</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td>Last hour</td>
							      <td>Video</td>
							      <td>Short (<4 minutes)</td>
							      <td>Live</td>
							      <th>Relevance</th>
							    </tr>
							    <tr>
							      <td>Today</td>
							      <td>Channel</td>
							      <td>Long (>20 minutes)</td>
							      <td>4K</td>
							      <td>Upload date</td>
							    </tr>
							    <tr>
							    	<td>This week</td>
							      <td>Playlist</td>
							      <td></td>
							      <td>HD</td>
							      <td>View count</td>
							    </tr>
							  </tbody>
							</table>
						</div>
					</div>
				        </div>
				      </div>
				    </div>
				    
				  </div>
				</div>

				<div class="container-fluid mt-4">
					<a href="#">
						<div class="card">
							<div class="row">
								<div class="col-md-3">
									<img src="https://i.ytimg.com/vi/hoNb6HuNmU0/hq720.jpg" alt="image" width="100%" height="138" />
								</div>
								<div class="col-md-7 p-0 pt-2">
									<div class="row">
										<div class="col-1 ml-2 mr-3 desc_hide">
											<img id="img" width="48" src="https://yt3.ggpht.com/a-/AOh14GinKFFtcXMMwrPfhFbie8tgLV0vMzfvVFSMlw=s68-c-k-c0x00ffffff-no-rj-mo" class="rounded-circle">
										</div>
										<div class="col-10">
											<p class="mb-1 title" title="Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh">Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh</p>
											<p class="subtitle">
												T-Series <i class="fas fa-check-circle"></i> 
												70M views • 7 months ago
											</p>
											<div class="short_description">
												Modi Govt has announced 20 Lakh Crore Package to help the people in these times of economic slowdown and recession. It was announced on 12th May but details were released in 5 parts across
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="container-fluid mt-2">
					<a href="#">
						<div class="card">
							<div class="row">
								<div class="col-md-3">
									<img src="https://i.ytimg.com/vi/hoNb6HuNmU0/hq720.jpg" alt="image" width="100%" height="138" />
								</div>
								<div class="col-md-7 p-0 pt-2">
									<div class="row">
										<div class="col-1 ml-2 mr-3 desc_hide">
											<img id="img" width="48" src="https://yt3.ggpht.com/a-/AOh14GinKFFtcXMMwrPfhFbie8tgLV0vMzfvVFSMlw=s68-c-k-c0x00ffffff-no-rj-mo" class="rounded-circle">
										</div>
										<div class="col-10">
											<p class="mb-1 title" title="Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh">Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh</p>
											<p class="subtitle">
												T-Series <i class="fas fa-check-circle"></i> 
												70M views • 7 months ago
											</p>
											<div class="short_description">
												Modi Govt has announced 20 Lakh Crore Package to help the people in these times of economic slowdown and recession. It was announced on 12th May but details were released in 5 parts across
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="container-fluid mt-2">
					<a href="#">
						<div class="card">
							<div class="row">
								<div class="col-md-3">
									<img src="https://i.ytimg.com/vi/hoNb6HuNmU0/hq720.jpg" alt="image" width="100%" height="138" />
								</div>
								<div class="col-md-7 p-0 pt-2">
									<div class="row">
										<div class="col-1 ml-2 mr-3 desc_hide">
											<img id="img" width="48" src="https://yt3.ggpht.com/a-/AOh14GinKFFtcXMMwrPfhFbie8tgLV0vMzfvVFSMlw=s68-c-k-c0x00ffffff-no-rj-mo" class="rounded-circle">
										</div>
										<div class="col-10">
											<p class="mb-1 title" title="Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh">Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh</p>
											<p class="subtitle">
												T-Series <i class="fas fa-check-circle"></i> 
												70M views • 7 months ago
											</p>
											<div class="short_description">
												Modi Govt has announced 20 Lakh Crore Package to help the people in these times of economic slowdown and recession. It was announced on 12th May but details were released in 5 parts across
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="container-fluid mt-2">
					<a href="#">
						<div class="card">
							<div class="row">
								<div class="col-md-3">
									<img class="main_img" src="https://i.ytimg.com/vi/hoNb6HuNmU0/hq720.jpg" alt="image" width="100%" height="138" />
								</div>
								<div class="col-md-7 p-0 pt-2">
									<div class="row">
										<div class="col-1 ml-2 mr-3 desc_hide">
											<img id="img" width="48" src="https://yt3.ggpht.com/a-/AOh14GinKFFtcXMMwrPfhFbie8tgLV0vMzfvVFSMlw=s68-c-k-c0x00ffffff-no-rj-mo" class="rounded-circle">
										</div>
										<div class="col-10">
											<p class="mb-1 title" title="Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh">Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh</p>
											<p class="subtitle">
												T-Series <i class="fas fa-check-circle"></i> 
												70M views • 7 months ago
											</p>
											<div class="short_description">
												Modi Govt has announced 20 Lakh Crore Package to help the people in these times of economic slowdown and recession. It was announced on 12th May but details were released in 5 parts across
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</a>
					</div>
				</div>


				<!-- content Section -->

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
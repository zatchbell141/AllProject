<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php include 'Includes/header.php';?>
</head>
  <body>

   <?php include 'Includes/topmenu.php';?>
	
       <?php include 'Includes/menu.php';?>
       <?php 
       include 'Includes/Conn.php';
       	$url=$_GET['url'];
       	$sql="select * from videos where id='$url' ORDER BY id DESC";
        $result=$con->query($sql);
        $row=$result->fetch_assoc();
        include 'Includes/seenby.php';
       ?>

       <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
							<h3><?php echo $row['desp']?></h3>	
					</div>
						<div class="video-grid">
							<video width="700" height="400" controls autoplay>
								  <source src="<?php echo $row['videos'];?>" type="video/mp4">
								  <!-- <source src="videos/Laptopbuy.mp4" type="video/ogg"> -->
								 
								</video>
						</div>
					</div>


					<!-- <div class="song-grid-right">
						<div class="share">
							<h5>Share this</h5>
							<ul>
								<li><a href="#" class="icon fb-icon">Facebook</a></li>
								<li><a href="#" class="icon dribbble-icon">Dribbble</a></li>
								<li><a href="#" class="icon twitter-icon">Twitter</a></li>
								<li><a href="#" class="icon pinterest-icon">Pinterest</a></li>
								<li><a href="#" class="icon whatsapp-icon">Whatsapp</a></li>
								<li><a href="#" class="icon like">Like</a></li>
								<li><a href="#" class="icon comment-icon">Comments</a></li>
								<li class="view">200 Views</li>
							</ul>
						</div>
					</div> -->
					<div class="clearfix"> </div>
					<div class="published">
						<script src="jquery.min.js"></script>
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$('#myList li:lt('+x+')').show();
									$('#loadMore').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$('#myList li:lt('+x+')').show();
									});
									$('#showLess').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$('#myList li').not(':lt('+x+')').hide();
									});
								});
							</script>
							<div class="load_more">	
								<ul id="myList">
									<li>
										<h4><?php echo $row['desp']?></h4>
										
									</li>
									<!-- <li>
										<p>Nullam fringilla sagittis tortor ut rhoncus. Nam vel ultricies erat, vel sodales leo. Maecenas pellentesque, est suscipit laoreet tincidunt, ipsum tortor vestibulum leo, ac dignissim diam velit id tellus. Morbi luctus velit quis semper egestas. Nam condimentum sem eget ex iaculis bibendum. Nam tortor felis, commodo faucibus sollicitudin ac, luctus a turpis. Donec congue pretium nisl, sed fringilla tellus tempus in.</p>
										<p>Nullam fringilla sagittis tortor ut rhoncus. Nam vel ultricies erat, vel sodales leo. Maecenas pellentesque, est suscipit laoreet tincidunt, ipsum tortor vestibulum leo, ac dignissim diam velit id tellus. Morbi luctus velit quis semper egestas. Nam condimentum sem eget ex iaculis bibendum. Nam tortor felis, commodo faucibus sollicitudin ac, luctus a turpis. Donec congue pretium nisl, sed fringilla tellus tempus in.</p> -->
										<!-- <div class="load-grids">
											<div class="load-grid">
												<p>Category</p>
											</div>
											<div class="load-grid">
												<a href="movies.html">Entertainment</a>
											</div>
											<div class="clearfix"> </div>
										</div> -->
									<!-- </li> -->
								</ul>
							</div>
					</div>
					<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">All Comments (8,657)</a>
							<div class="box">
								<form>
									<input type="text" placeholder="Name" required=" ">			           					   
									<input type="text" placeholder="Email" required=" ">
									<input type="text" placeholder="Phone" required=" ">
									<textarea placeholder="Message" required=" "></textarea>
									<input type="submit" value="SEND">
									<div class="clearfix"> </div>
								</form>
							</div>
							
						</div>
						
					</div>
				</div>
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<?php
                       include 'Includes/Conn.php';
                       $cat=$row['catalogid'];
                       $nxtsql="select * from videos where catalogid='$cat' ORDER BY id DESC";
                       $nxtresult=$con->query($nxtsql);
                       if($nxtresult->num_rows>0)
                       {
                           while($nxtrow=$nxtresult->fetch_assoc())
                           {
                             $adminid=$nxtrow['uploadby'];
	                         $adminsql="select * from admin where id='$adminid' ORDER BY id DESC";
	                         $adminresult=$con->query($adminsql);
	                         $adminrow=$adminresult->fetch_assoc();
                     ?>
					<div class="single-grid-right">
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="playvideos.php?url=<?php echo $nxtrow['id'];?>"><img src="<?php echo $row['pic']?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="playvideos.php?url=<?php echo $nxtrow['id'];?>" class="title"><?php echo $row['desp']?></a>
								<p class="author"><a href="#" class="author"><?php echo $adminrow['fullname']?></a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
					<?php
						}
					}
					?>
							
						</div>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>
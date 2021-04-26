<?php
	
	date_default_timezone_set('Asia/Kolkata');
	$userid=$_SESSION['login_id'];
	$videosid=$_GET['url'];
	$date=date('Y-m-d');
	$time=date('h:i:s');
	$sql="INSERT INTO `seenby`(`id`, `userid`, `videoid`, `date`, `time`) VALUES ('','$userid','$videosid','$date','$time')";
	$con->query($sql);
?>
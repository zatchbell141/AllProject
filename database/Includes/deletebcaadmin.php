<?php
	include 'bcaConn.php';
	if(isset($_GET['varname']))
	{
		$adminid=$_GET['varname'];
		$query="DELETE FROM `admin` WHERE `id` = '$id'";
		mysqli_query($con,$query); 
		header("location:../admin.php");
	}
	if(isset($_GET['admyrsid']))
	{
		$adminyrsid=$_GET['admyrsid'];
		$query="DELETE FROM `admissionyrs` WHERE `id` = '$adminyrsid'";
		mysqli_query($con,$query); 
		header("location:../admissionyrs.php");
	}
	if(isset($_GET['onlineadmision']))
	{
		$adminyrsid=$_GET['onlineadmision'];
		$query="DELETE FROM `addonline` WHERE `id` = '$adminyrsid'";
		mysqli_query($con,$query); 
		header("location:../onlineadm.php");
	}
?>
<?php
include 'Conn.php';
$id=$_GET['varname'];
$sql="select * from addonline where id='$id'";
$result=$con->query($sql);
$row=$result->fetch_assoc();

$contactNo=$row['contact'];
$phno=$contactNo;
   // Authorisation details.
	$username = "atulvishwakarma3095@gmail.com";
	$hash = "81afab145fab8fe78cadb6dc56551614b3bba6a9a632016ec3876551a60147af";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $phno; // A single number or a comma-seperated list of numbers
    $msg ="Dear BCA students,

Your BCA Online Admission Process 2020-21 is Successfully completed.

Thanks
BCA Co-ordinatior";
	//$msg="Thank You To Attending Computer Lecture In Yash Infotech";
	$message = $msg;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	//echo $result;	  

header("location:onlineadmissin.php");
?>
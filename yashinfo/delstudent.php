<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="Delete from studentdt where studentid='".$prn."'";
mysqli_query($con,$query); 
header("location:addstudents.php");
?>
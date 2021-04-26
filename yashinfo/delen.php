<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="Delete from enquiry where id='".$prn."'";
mysqli_query($con,$query); 
header("location:enquiryreports.php");
?>
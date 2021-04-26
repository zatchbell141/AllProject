<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="Delete from salary where id='".$prn."'";
mysqli_query($con,$query); 
header("location:attendence.php");
?>
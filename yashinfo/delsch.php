<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="Delete from sch where id='".$prn."'";
mysqli_query($con,$query); 
header("location:schedules.php");
?>
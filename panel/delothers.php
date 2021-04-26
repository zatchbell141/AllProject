<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="Delete from others where id='".$prn."'";
mysqli_query($con,$query); 
header("location:others.php");
?>
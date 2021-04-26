<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="Delete from staff where name='".$prn."'";
mysqli_query($con,$query); 
header("location:addtechers.php");
?>
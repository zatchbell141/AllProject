<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="update studreg set active=0 where id='".$prn."'";
mysqli_query($con,$query); 
header("location:addusers.php");
?>
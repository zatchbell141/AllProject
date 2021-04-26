<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="Delete from admin where id='".$prn."'";
mysqli_query($con,$query); 
header("location:addadmin.php");
?>
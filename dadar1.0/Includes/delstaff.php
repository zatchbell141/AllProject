<?php
include 'Conn.php';
$id=$_GET['varname'];
$query="update staff set active='0' where id='".$id."'";
mysqli_query($con,$query); 
header("location:addstaff.php");
?>
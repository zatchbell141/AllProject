<?php
include 'Conn.php';
$id=$_GET['varname'];
$query="update salary set starttime='00:00' and endtime='00:00' and duration='0' and sal='0' where id='$id'";
mysqli_query($con,$query); 
header("location:addstaff.php");
?>
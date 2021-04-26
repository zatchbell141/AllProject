<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="update files set active='0' where id='$prn'";
mysqli_query($con,$query); 
header("location:files.php");
?>
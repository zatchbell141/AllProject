<?php
include 'Conn.php';
$prn=$_GET['varname'];
$query="Delete from subject where id='".$prn."'";
mysqli_query($con,$query); 
header("location:addsubject.php");
?>
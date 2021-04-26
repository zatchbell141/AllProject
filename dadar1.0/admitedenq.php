<?php
include 'Conn.php';
$id=$_GET['varname'];
$query="update enquiry set admitted='1' where id='".$id."'";
mysqli_query($con,$query); 
header("location:enquiry.php");
?>
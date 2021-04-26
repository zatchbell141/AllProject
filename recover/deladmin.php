<?php
include 'Conn.php';
$id=$_GET['varname'];
$query="DELETE FROM `admin` WHERE `admin`.`id` = '$id'";
mysqli_query($con,$query); 
header("location:addadmin.php");
?>
<?php
include 'Conn.php';
$id=$_GET['varname'];
$query="update addonline set active='0' where id='".$id."'";
mysqli_query($con,$query); 
header("location:onlineadmissin.php");
?>
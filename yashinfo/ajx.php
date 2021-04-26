<?php
include 'Conn.php';
$code=$_GET['code'];
if($code!="")
{
	  	   $sql="select  name from subject where code='".$code."'";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();
           echo $row['name'];
}
?>
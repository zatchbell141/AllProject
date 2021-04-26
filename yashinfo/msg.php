<?php
include 'Conn.php';
$prn=$_GET['varname'];
$sql="select * from enquiry where id='".$prn."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
$name=$row['name'];
$contact=$row['phno'];
$msg=$name."\nThank you for showing interest in admission process for 2018-2019 of Tilak Maharashtra Vidyapeeth Pune.\nContact:9167218889/9820996548";
$query="insert into msg(name,msg,contact)values('$name','$msg','$contact')";
mysqli_query($con,$query); 
header("location:followup.php");
?>
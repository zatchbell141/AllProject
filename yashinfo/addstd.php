<?php
include 'Conn.php';
$prn=$_GET['varname'];
$sql="select * from studentdt where studentid='".$prn."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
$fullname= $row['fullname']."<br>";
$lname= $row['lastname']."<br>";
$name= $row['firstname']."<br>";
$father= $row['fathername']."<br>";
$mother= $row['mothername']."<br>";
$prn= $row['prn']."<br>";
$trn= $row['trn']."<br>";
$year= "Bachelor of Computer Applications- R- Second Year"."<br>";
$sem ="III & IV";
 $sql1="insert into studentstd values('$fullname','$name','$lname','$father','$mother','$year','$sem','$prn','$trn')";
    if($con->query($sql1)==true)
    {
    echo "Record Updated..!!!!";
    }
    else
    {
    echo "Failed";
    }
//header("location:studenetdatareport.php");
?>
<?php

include_once 'Conn.php';
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
include 'Conn.php';
    $code=protect($_POST['txtsubjectcode']);
    $Name=protect($_POST['txtsubjectname']);
    $sem=protect($_POST['txtsem']);
    $edition=protect($_POST['txtedition']);
    
$sql="insert into subject(code,name,sem,edition) values('$code','$Name','$sem','$edition')";
if($con->query($sql)==true)
{
echo "Insert sucessfull..!!";
}
else
{
echo "Failed";
}
?>
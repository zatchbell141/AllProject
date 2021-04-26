<?php
$key=md5('india');
$salt=md5('india');
function encrypt($string,$key)
{
    $string=rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
    return $string;
}
function decrypt($string,$key)
{
    $string=rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string), MCRYPT_MODE_ECB));
    return $string;
}
function hashword($string,$salt)
{
    $string=crypt($string,'$1$'.$salt.'$1$');
    return $string;
}
include_once 'Conn.php';
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
include 'Conn.php';
 $sql="select * from users";
 $result=$con->query($sql);
 $row=$result->fetch_assoc();
 $id=$row['studentid'];
 $studentid=protect($_POST['txtsubjectid']);
 if($studentid==$id)
 {
    echo "Existing User..!!";
 }
 else
 {
include 'Conn.php';
    $studentid=protect($_POST['txtsubjectid']);
    $fullname=protect($_POST['txtaddfullname']);
    $name=protect($_POST['txtaddname']);
    $lastname=protect($_POST['txtaddlastname']);
    $year=protect($_POST['txtaddyear']);
    $sem=protect($_POST['txtaddsem']);
    $passwd=protect($_POST['txtaddpasswd']);
    $pswd=protect(encrypt($passwd,$key));
    $username=protect($_POST['txtaddusername']);

$sql="insert into users(studentid,fullname,name,lastname,year,sem,username,passwd) values('$studentid','$fullname','$name','$lastname','$year','$sem','$username','$pswd')";
if($con->query($sql)==true)
{
echo "Insert sucessfull..!!";
}
else
{
echo "Failed";
}
}
?>
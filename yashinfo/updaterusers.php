<?php
include 'Conn.php';
include 'session.php';
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

function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
	$studentid=protect($_POST['txtsubjectid']);
    $fullname=protect($_POST['txtaddfullname']);
    $name=protect($_POST['txtaddname']);
    $lastname=protect($_POST['txtaddlastname']);
    $year=protect($_POST['txtaddyear']);
    $sem=protect($_POST['txtaddsem']);
    $passwd=protect($_POST['txtaddpasswd']);
    $pswd=protect(encrypt($passwd,$key));
    $username=protect($_POST['txtaddusername']);
$query="update users set fullname='".$fullname."',name='".$name."',lastname='".$lastname."',year='".$year."',sem='".$sem."',username='".$username."',passwd='".$pswd."' where studentid='".$studentid."'";
mysqli_query($con,$query); 
echo "Record Updated..!!";
?>
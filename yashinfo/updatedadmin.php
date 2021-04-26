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
$Name=protect($_POST['txtname']);
$lastname=protect($_POST['txtlastname']);
$username=protect($_POST['txtusername']);
$passwd=protect($_POST['txtpasswd']);
$pswd=protect(encrypt($passwd,$key));
$gender=protect($_POST['txtemail']);
$contact=protect($_POST['txtcontact']);
$query="update admin set name='".$Name."',lastname='".$lastname."',username='".$username."',passwd='".$pswd."',contact='".$contact."',email='".$gender."' where username='".$username."'";
mysqli_query($con,$query); 
echo "Record Updated..!!";
?>
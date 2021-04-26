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
 $sql="select * from admin";
 $result=$con->query($sql);
 $row=$result->fetch_assoc();
 $id=$row['username'];
 $studentid=protect($_POST['txtusername']);
 if($studentid==$id)
 {
    echo "Existing User..!!";
 }
 else
 {
include 'Conn.php';
 $Name=protect($_POST['txtname']);
    $lastname=protect($_POST['txtlastname']);
    $username=protect($_POST['txtusername']);
    $passwd=protect($_POST['txtpasswd']);
    $pswd=protect(encrypt($passwd,$key));
    $gender=protect($_POST['txtemail']);
    $contact=protect($_POST['txtcontact']);
$sql="insert into admin(name,lastname,username,passwd,email,contact) values('$Name','$lastname','$username', '$pswd','$gender','$contact')";
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
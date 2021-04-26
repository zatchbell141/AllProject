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

function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
    include 'Conn.php';
    $username=protect($_POST['txtusername']);
    $passwd=protect($_POST['txtpasswd']);
     $pswd=protect(encrypt($passwd,$key));
    $fullname=protect($_POST['txtfullname']);
    $date=protect($_POST['txtdate']);
    $studentid=protect($_POST['txtstudid']);
     $sql="INSERT INTO `studentreg`(`id`, `studentid`, `fullname`, `username`, `passwd`, `date`, `active`) 
     VALUES ('','$studentid','$fullname','$username','$pswd','$date','1')";
        if($con->query($sql)==true)
        {
            echo "Successfully Created..!!";
        }
        else
        {
            echo "Failed to create user";
        }

?>
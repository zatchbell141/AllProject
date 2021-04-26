<?php
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
include 'conn.php';
include 'session.php';
	$username=protect($_POST['txtto']);
	$form=protect($_SESSION['login_user']);
	$date=protect(date('Y-m-d'));
	$work=protect($_POST['txtmsg']);

	 $sql="INSERT INTO `note`(`id`, `username`, `from`, `date`, `works`, `status`, `active`) 
     VALUES ('','$username','$form','$date','$work','0','1')";
        if($con->query($sql)==true)
        {
            echo "Successfully Task Sended...!!";
        }
        else
        {
            echo "Failed to save task";
        }
?>
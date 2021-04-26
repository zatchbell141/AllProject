<?php
include_once 'Conn.php';
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
$id=protect($_POST['txtsubjectid']);
$Name=protect($_POST['txtsubjectname']);
$sem=protect($_POST['txtsem']);
$edition=protect($_POST['txtedition']);
$code=protect($_POST['txtsubjectcode']);
$query="update subject set code='".$code."', name='".$Name."',sem='".$sem."',edition='".$edition."' where id='".$id."'";
mysqli_query($con,$query); 
echo "Record Updated..!!";
?>
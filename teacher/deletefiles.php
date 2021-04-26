<?php
include_once 'Conn.php';
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
$id=protect($_GET['varname']);
$query="update files set active='0' where id='".$id."'";
mysqli_query($con,$query); 
echo "Record Deleted..!!";
header("location:notesem1.php");
?>
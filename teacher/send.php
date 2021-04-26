<?php
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
include 'Conn.php';
$target="Doc/".basename($_FILES['ebooks']['name']);
//$image=$_FILES['ebooks']['name'];
 	$Name=protect($_POST['txtfilename']);
    $file=protect($_FILES['ebooks']['name']);
    $year=protect($_POST['txtyrs']);
    $sem=protect($_POST['txtsem']);
    $username=protect($_POST['txtusername']);
    $date=date("d/m/Y");
    $sql="insert into files(name,file,years,sem,username,date,active) values('$Name','$file','$year','$sem','admin@bcaedu.in','$date','1')";
    mysqli_query($con,$sql);
    $msg=" ";
    if(move_uploaded_file($_FILES['ebooks']['tmp_name'],$target))
    {
       echo $msg="Books Uploaded....";
    }
    else
    {
       echo $msg="Fail to Upload..";
    }
  


?>
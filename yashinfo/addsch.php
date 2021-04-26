 <?php
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
 <?php
            
                include 'Conn.php';
                $name=protect($_POST['txtstaffname']);
                $staffid=protect($_POST['txtstaffid']);
                $username=protect($_POST['txtstaffusername']);
                $date=protect($_POST['txtschdate']);
                $subject=protect($_POST['txtsubject']);
                $tym=protect($_POST['txttym']);
                $year=protect($_POST['year']);
                $sql="insert into sch(schdate,subject,schtym,staffname,username,staffid,year) values('$date','$subject','$tym','$name','$username','$staffid','$year')";
                if($con->query($sql)==true)
                {
                echo "Insert sucessfull..!!";
                }
                else
                {
                echo "Failed";
                }
            


?>
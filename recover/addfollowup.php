<?php 
include 'Conn.php';
include 'protect.php';
if(isset($_POST['btnsubmit']))
{
     $Name=protect($_POST['txtfullname']);
    $fullname=protect($_POST['txtfullname']);

    $date=protect($_POST['txtdate']);
    $date=strtotime($date);
    $date=date('Y-m-d',$date);
    
    $reason=protect($_POST['txtresn']);

    $descrip=protect($_POST['txtdescrip']);
    $contact=protect($_POST['txtcontact']);
    $sql="INSERT INTO `followup`(`id`, `name`, `fullname`, `contact`, `descip`, `reason`, `date`, `active`) VALUES ('','$Name','$fullname','$contact','$descrip','$reason','$date','1')";
    if($con->query($sql)==true)
    {
        echo ' <div class="alert alert-success" role="alert">
                    <strong>Insert sucessfull..!!</strong>
                  </div>';
    
    }
    else
    {
    echo ' <div class="alert alert-danger" role="alert">
                    <strong>Failed to Save....!!</strong>
                  </div>';
    }

}
   
?>
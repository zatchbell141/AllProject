<?php
if(isset($_POST['btnsubmit']))
{
	Include 'Includes/Conn.php';
	$fullname=$_POST['txtfullname'];
	$subject=$_POST['txtsubject'];
	$msg=$_POST['txtmsg'];
	
	$sql="INSERT INTO `feedback`(`id`, `fullname`, `subject`, `msg`) VALUES ('','$fullname','$subject','$msg')";
	if($con->query($sql)==true)
    {
    	echo ' <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Thank You For Your Feedback..!!
                  </div>';
    }
    else
    {
    	echo '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Failed to update record..!!
                  </div>';
    }
}	
?>
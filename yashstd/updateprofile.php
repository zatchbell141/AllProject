<?php
if(isset($_POST['btnsubmit']))
{
	Include 'Includes/Conn.php';
	$username=$_POST['txtusername'];
	$passwd=md5($_POST['txtpasswd']);
	$Fullname=$_POST['txtfullname'];
	$id=$_POST['txtstudentID'];
	$sql="update users set fullname='$Fullname',username='$username',passwd='$passwd' where id='$id'";
	if($con->query($sql)==true)
    {
    	echo ' <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Profile Updated..!!
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
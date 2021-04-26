<?php
	include 'Includes/bcaConn.php';
	include 'Includes/protect.php';
	if(isset($_POST['btneditadmin']))
	{
		 
	 	 $id=protect($_POST['txtid']);
	 	 $name=protect($_POST['txtname']);
	 	 $lastname=protect($_POST['txtlastname']);
	 	 $username=protect($_POST['txtusername']);
	 	 $passwd=protect($_POST['txtpasswd']);
	 	 $pswd=protect(encrypt($passwd,$key));
	 	 $email=protect($_POST['txtemail']);
		 $contact=protect($_POST['txtcontact']);
		$sql="update admin set name='$name',lastname='$lastname',username='$username',passwd='$pswd',email='$email',contact='$contact' where id='$id'";
		if($con->query($sql)==true)
		{
		echo '
		                         <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h6><i class="fas fa-check"></i><b>Success..!</b></h6>
                    <a href="admin.php">Click to go Admin Table</a>
                  </div>
		                        ';
		}
		else
		{
		 echo '
		                        <div class="alert alert-danger alert-dismissible" role="alert">
			                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                      <span aria-hidden="true">&times;</span>
			                    </button>
			                    <h6><i class="fas fa-ban"></i><b> Stop..!</b></h6>
			                    Failed To Update Record.Please check data..!!
			                  </div>
		                        ';
		}
	}
	if(isset($_POST['btneditadmissionyrs']))
	{
		 $id=protect($_POST['txtid']);
	 	 $name=protect($_POST['txtname']);
	 	 $sql="update admissionyrs set name='$name' where id='$id'";
		if($con->query($sql)==true)
		{
		echo '
		                         <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h6><i class="fas fa-check"></i><b>Success..!</b></h6>
                    <a href="admissionyrs.php">Click to go Admission Year Table</a>
                  </div>
		                        ';
		}
		else
		{
		 echo '
		                        <div class="alert alert-danger alert-dismissible" role="alert">
			                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                      <span aria-hidden="true">&times;</span>
			                    </button>
			                    <h6><i class="fas fa-ban"></i><b> Stop..!</b></h6>
			                    Failed To Update Record.Please check data..!!
			                  </div>
		                        ';
		}
	}
?>
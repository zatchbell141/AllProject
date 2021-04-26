<?php
	include 'Includes/Conn.php';
	include 'Includes/protect.php';
	if(isset($_POST['btnaddstudent']))
	{
			$coursecode=protect($_POST['txtstudcode']);
			$coursename=protect($_POST['txtstudcoursename']);
		 	$lastname=protect($_POST['txtstudlast']);
		 	$firstname=protect($_POST['txtstudname']);
			$fathername=protect($_POST['txtstudfather']);
			$mothername=protect($_POST['txtstudmother']);

			$dob=protect($_POST['txtstuddob']);
		    $dob=strtotime($dob);
		    $dob=date('Y-m-d',$dob);

		 	$gender=protect($_POST['txtstudgender']);
		 	$fullname=$lastname." ".$firstname." ".$fathername;

			$statusm=protect($_POST['txtstudstatus']);
		 	$localaddress=protect($_POST['txtstudlocaladd']);
		 	$permaddress=protect($_POST['txtstudperment']);
		 	$caste=protect($_POST['txtstudcaste']);

			$state =protect($_POST['txtstudstate']);
			$pincode=protect($_POST['txtstudpin']);
			$mob =protect($_POST['txtstudcontact']);
			$email=protect($_POST['txtstudemail']);
			
		 	$prn=protect($_POST['txtstudprn']);
		 	$trn=protect($_POST['txtstudtrn']);
			$qualification=protect($_POST['txtstudquli']);
			$medium=protect($_POST['txtstudmedium']);
			$admissionstatus=protect($_POST['txtstudadmission']);
			$aadhar=protect($_POST['txtstudaadhar']);
		    $cnfno=protect($_POST['txtcenterno']);
		    $sql = "INSERT INTO studentdt(fullname,coursecode,coursename,lastname,firstname,fathername,mothername,dob,gender,statusm,localaddress,permaddress,caste,state,pincode,mob,email,prn,trn,qualification,medium,admissionstatus,aadhar,CenterFormNo,active)
		    VALUES ('$fullname','$coursecode','$coursename','$lastname','$firstname','$fathername','$mothername','$dob','$gender','$statusm','$localaddress','$permaddress','$caste','$state','$pincode','$mob','$email','$prn','$trn','$qualification','$medium','$admissionstatus','$aadhar','$cnfno',1)";

		   if($con->query($sql)==true)
				{
					echo '
		                         <div class="alert-area">
		                            <div class="container">
		                                <div class="row">
		                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                                        <div class="alert-inner">
		                                            <div class="alert-hd">
		                                                 <div class="alert-list">
		                                                    <div class="alert alert-success" role="alert">Your data successfully added..!!
		                                                   </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                        ';
				}
				else
				{
					echo '
		                                <div class="alert-area">
		                                    <div class="container">
		                                        <div class="row">
		                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                                                <div class="alert-inner">
		                                                    <div class="alert-hd">
		                                                         <div class="alert-list">
		                                     <div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! Please fill the form
		                                        </div>
		                                         </div>
		                                </div>
		                            </div>
		                        </div>';
				}
	}

 ?>
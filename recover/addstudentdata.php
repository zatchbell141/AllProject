<?php
	include 'Conn.php';
	include 'protect.php';
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
			echo "Insert sucessfull..!!";
		}
		else
		{
			echo "Failed";
		}

?>
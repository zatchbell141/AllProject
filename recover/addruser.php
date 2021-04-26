<?php
include 'Conn.php';
include 'protect.php';

 $sql="select * from studreg";
 $result=$con->query($sql);
 $row=$result->fetch_assoc();
 $id=$row['studentid'];
 
 
 
 $studentid=protect($_POST['txtsubjectid']);
 if($studentid==$id)
 {
    echo "Existing User..!!";
 }
 else
 {
include 'Conn.php';
    $studentid=protect($_POST['txtsubjectid']);
    $fullname=protect($_POST['txtaddfullname']);
    $name=protect($_POST['txtaddname']);
    $lastname=protect($_POST['txtaddlastname']);
    $year=protect($_POST['txtaddyear']);
    $sem=protect($_POST['txtaddsem']);
    $passwd=protect($_POST['txtaddpasswd']);
    $pswd=protect(md5($passwd));
    $username1=protect($_POST['txtaddusername']);
     $prn=protect($_POST['txtstdprn']);
    $sql="insert into studreg(studentid,fullname,name,lname,PRN,year,sem,username,passwd,recfno,active) values('$studentid','$fullname','$name','$lastname','$prn','$year','$sem','$username1','$pswd','0',1)";
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
                         
 
 $consql="select * from studentdt where fullname='$fullname'";
 $conresult=$con->query($consql);
 $conrow=$conresult->fetch_assoc();
                     echo $phno=$conrow['mob'];
   // Authorisation details.
	$username = "atulvishwakarma3095@gmail.com";
	$hash = "81afab145fab8fe78cadb6dc56551614b3bba6a9a632016ec3876551a60147af";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $phno; // A single number or a comma-seperated list of numbers
	$msg ="Dear BCA student
Refer below login details to refer ebooks and other  BCA Content on https://bcaedu.in.
Click on Student login 
Username:-'$username1'
Password:-'$passwd'";
	//$msg="Thank You To Attending Computer Lecture In Yash Infotech";
	$message = $msg;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
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
                             <div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! failed to add.!
                                </div>
                                 </div>
                        </div>
                    </div>
                </div>
                        ';
}
}
?>
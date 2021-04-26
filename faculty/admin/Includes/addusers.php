<?php
include 'includes/Conn.php';
include 'includes/protect.php';
if(isset($_POST['btnaddusers']))
{
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
}
?>
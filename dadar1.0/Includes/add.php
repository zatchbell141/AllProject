<?php
include 'Conn.php';
include 'pass.php';
include 'protect.php';
 $sql="select * from admin";
 $result=$con->query($sql);
 $row=$result->fetch_assoc();
 $id=$row['username'];
 $studentid=protect($_POST['txtusername']);
 if($studentid==$id)
 {
    echo "Existing User..!!";
 }
 else
 {
include 'Conn.php';
 $Name=protect($_POST['txtname']);
    $lastname=protect($_POST['txtlastname']);
    $username=protect($_POST['txtusername']);
    $passwd=protect($_POST['txtpasswd']);
    $pswd=protect(encrypt($passwd,$key));
    $gender=protect($_POST['txtemail']);
    $contact=protect($_POST['txtcontact']);
$sql="insert into admin(name,lastname,username,passwd,email,contact) values('$Name','$lastname','$username', '$pswd','$gender','$contact')";
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
?>
<?php
if(isset($_POST['btnsubmit']))
{
    

include 'Conn.php';
include 'pass.php';
include 'protect.php';
 $prefix=protect($_POST['prefix']);
 $Name=protect($_POST['txtname']);
    $lastname=protect($_POST['txtlastname']);
    $username=protect($_POST['txtusername']);
    $passwd=protect($_POST['txtpasswd']);
    $pswd=protect(encrypt($passwd,$key));
    $gender=protect($_POST['txtemail']);
    $contact=protect($_POST['txtcontact']);
    $type=protect($_POST['mode']);
     $chcksql="SELECT * FROM `staff` where name='$Name' and lastname='$lastname'";
			  $chckresult=mysqli_query($con,$chcksql);
			  $chckrow=mysqli_fetch_array($chckresult);
			  $count=mysqli_num_rows($chckresult);
			  if($count==1)
			  {
			  echo '
                        <div class="alert-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert-inner">
                                            <div class="alert-hd">
                                                 <div class="alert-list">
                             <div class="alert alert-danger alert-mg-b-0" role="alert">Staff already in database..!!
                                </div>
                                 </div>
                        </div>
                    </div>
                </div>
                        ';
			    
			  }
			else
			{
			
$sql="insert into staff(prefix,name,lastname,username,passwd,email,contact,type,active) values('$prefix','$Name','$lastname','$username', '$pswd','$gender','$contact','$type',1)";
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
<?php
if(isset($_POST['btnsubmit']))
{
include 'Includes/Conn.php';
include 'Includes/protect.php';
    $code=protect($_POST['txtsubjectcode']);
    $name=protect($_POST['txtsubjectname']);
    $sem=protect($_POST['txtsem']);
    $edition=protect($_POST['txtedition']);
    $subject=$code.' '.$name;
     $chcksql="SELECT * FROM `subject` where code='$code'";
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
                                     <div class="alert alert-danger alert-mg-b-0" role="alert">Subject already in database..!!
                                        </div>
                                         </div>
                                </div>
                            </div>
                        </div>
                                ';
			     
			  }
			else
			{
        $sql="insert into subject(code,name,sem,subject,edition,active) values('$code','$name','$sem','$subject','$edition',1)";
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
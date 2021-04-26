<?php
include 'Conn.php';
include 'pass.php';
include 'protect.php';
if(isset($_POST['btnsubmit']))
{
    $id=protect($_POST['txtid']);
    $fullname=protect($_POST['txtaddfullname']);
    $name=protect($_POST['txtaddname']);
    $lastname=protect($_POST['txtaddlastname']);
    $year=protect($_POST['txtaddyear']);
    $sem=protect($_POST['txtaddsem']);
    $passwd=protect($_POST['txtaddpasswd']);
    $pswd=protect(encrypt($passwd,$key));
    $username=protect($_POST['txtaddusername']);
     $prn=protect($_POST['txtstdprn']);
    $sql="update studreg set fullname='$fullname',name='$name',lname='$lastname',username='$username',passwd='$pswd',recfno='0',active='1' where id='$id'";
    if($con->query($sql)==true)
    {
                           echo "<script>window.location.href='addusers.php';</script>";
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
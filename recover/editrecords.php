<?php
include 'Conn.php';
include 'protect.php';
if(isset($_POST['btnsubmit']))
{
    $id=protect($_POST['txtstudentid']);
    $name=protect($_POST['txtname']);
    $lastname=protect($_POST['txtlastname']);
    $fathername=protect($_POST['txtfathername']);
    $mothername=protect($_POST['txtmothername']);
    $fullname=$lastname." ".$firstname." ".$fathername;
    $prn=protect($_POST['txtprn']);
    $trn=protect($_POST['txttrn']);
    $sql="update studentdt  set fullname='$fullname',firstname='$name',lastname='$lastname',fathername='$fathername',mothername='$mothername',prn='$prn',trn='$trn' where studentid='$id'";
    if($con->query($sql)==true)
    {
                           echo "<script>window.location.href='insertmanully.php';</script>";
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
<?php
include 'Conn.php';
//include 'protect.php';
if(isset($_POST['btnupdate']))
{
    $code=protect($_POST['txtsubjectcode']);
    $name=protect($_POST['txtsubjectname']);
    $sem=protect($_POST['txtsem']);
    $edition=protect($_POST['txtedition']);
    $subject=$code.' '.$name;
    $id=protect($_POST['txtid']);
$sql="update subject set code='$code',name='$name',sem='$sem',subject='$subject',edition='$edition',active='1' where id='$id'";
if($con->query($sql)==true)
{
/*echo '
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
                        ';*/
                        echo '<script>
                        window.location = "http://localhost:81/yashdadar/addsubject.php";
                    </script>';
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
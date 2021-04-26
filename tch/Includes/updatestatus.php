<?php
    include 'Conn.php';
    include 'pass.php';
    if(isset($_POST['btnstatus']))
    {
        $id=$_POST['txtid'];
        $status=$_POST['txtstatus'];
         $sql="update bonafide set status='$status' where id='$id'";
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
                                                    <div class="alert alert-success" role="alert">Your data successfully Updated..!!
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
                             <div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! Failed to Update..!
                                </div>
                                 </div>
                        </div>
                    </div>
                </div>
                        ';
                }
    }
?>
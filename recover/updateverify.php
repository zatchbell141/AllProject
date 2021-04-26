<?php
    include 'Conn.php';
    if(isset($_POST['btnsubmit']))
    {
        $id=protect($_POST['txtid']);
         $coursename=$_GET['yrs'];
         $yearadm=$_GET['yrsadm'];
        $status=protect($_POST['txtverifyname']);
         $sql="update receipt set decp='$status' where id='$id'";
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
                       
                        
                      
                        echo("<script>location.href = 'finalreportscoll.php?course=$coursename&adm=$yearadm';</script>");
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
<?php
    include 'protect.php';
    if(isset($_POST['btnsubmit']))
    {
            $id=$_POST['txtid'];
            $name=$_POST['txtadmissionyrs'];
            $qrl="update admissionyrs set name='$name' where id='$id'";
            if($con->query($qrl)==true)
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
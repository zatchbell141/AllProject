<?php
include 'Conn.php';
include 'protect.php';

$name=protect($_POST['txtstudcoursename']);
$fees=protect($_POST['txtfees']);
$tmvfees=protect($_POST['txttmvfees']);
$year=protect($_POST['txtyear']);
$sem=protect($_POST['txtsem']);
$mode=protect($_POST['txtintreg']);
$qrl="INSERT INTO `fees`(`feesid`, `name`, `fees`, `tmvFees`, `year`, `sem`, `active`, `payment`, `mode`) 
VALUES ('','$name','$fees','$tmvfees','$year','$sem','1','1','$mode')";
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

?>
<?php

if(isset($_POST['btnsubmit']))
{
    include 'Includes/Conn.php';
    $id=$_POST['txtid'];
    $subjectcode=$_POST['txtsubcode'];
    $subjectname=$_POST['txtsubname'];
    $edition=$_POST['txtedition'];
    $sem=$_POST['txtsem'];
    $subject=$subjectcode.' '.$subjectname;
    $sql="update subject set code='$subjectcode',name='$subjectname',sem='$sem',subject='$subject',edition='$edition' where id='$id'";
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
                                                            <div class="alert alert-success" role="alert">Your data successfully update..!!
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
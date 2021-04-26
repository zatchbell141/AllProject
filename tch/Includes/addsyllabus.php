<?php
include 'Conn.php';
if(isset($_POST['btnsubmit']))
{
    $subject=$_POST['txtsubject'];
    $syllabus=$_POST['txtsyllabus'];
    $sql="insert into syllabus(subjectid,syllabus) values('$subject','$syllabus')";
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
?>
<?php
include 'session.php';
 include 'Conn.php';
            
                    $id=$_POST['txtendid'];
                    $name=$_POST['txtname'];
                    $fathername=$_POST['txtfathername'];
                    $lastname=$_POST['txtlastname'];
                    $contact=$_POST['txtcontact'];
                    $add=$_POST['txtaddress'];
                    $handleby=$_POST['txthandle'];
                    $cousem=$_POST['txtcoursem'];
                    $cousen=$_POST['txtcourses'];
                    $studentid=$_POST['txtstdid'];
                    $date=$_POST['txtdate'];
                    $enid=$_POST['txtendid'];
                    $date=strtotime($date);
                    $date=date('Y-m-d',$date);
                    $query="update enquiry set name='".$name."',fathername='".$fathername."',lastname='".$lastname."', cousemode='".$cousem."', cousename='".$cousen."', contact='".$contact."', followup='".$follw."', address='".$add."',date='".$date."',active=1 where id='".$enid."'";
                        
 if($con->query($query)==true)
                    {
                    echo "Updated sucessfull..!!";
                    }
                    else
                    {
                    echo "Failed";

                    }
?>
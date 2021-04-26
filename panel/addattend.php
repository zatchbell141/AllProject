<?php
include 'Conn.php';
$nm=$_POST['txtname'];
                        $tp=$_POST['txttropic'];
                        $sub=$_POST['txtsubject'];
                        $hr=$_POST['txthrs'];
                        $tm=$_POST['txttime'];
                        $date=$_POST['txtdate'];
                        $sal=$_POST['txtsal'];
                        $staffid=$_POST['txtstaffid'];
                        $qrl="insert into salary(staffid,name,topic,subject,hrs,tm,sessiondate,sal) values('$staffid','$nm','$tp','$sub','$hr','$tm','$date','$sal')";
                        mysqli_query($con,$qrl); 
                        $msg=1;
                        echo "Record Saved..!!";
                         $name = $nm;
                            $sql="select * from staff where id like '%$staffid%'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                            
                       
                        $email =  "admin@bcaedu.in";
                        $message="Topic:".$tp."\nSubject:".$sub."\nHours:".$hr."\nToday Remuneration:".$sal;
                        $to =$row['contact'];
                        $subject = "Today Information: $name";
                        $headers = "From: $email";
                        
                        mail($to, $subject, $message, $headers);
                        echo "Record Saved..!!";
                        ?>
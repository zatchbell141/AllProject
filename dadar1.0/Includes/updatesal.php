<?php
include 'Conn.php';
if(isset($_POST['btnsubmit']))
{
   function hoursToMinutes($hours)
                        {
                            if (strstr($hours, ':'))
                            {
                                # Split hours and minutes.
                                $separatedData = explode(':', $hours);

                            $minutesInHours    = $separatedData[0] * 60;
                            $minutesInDecimals = $separatedData[1];

                             $totalMinutes = $minutesInHours + $minutesInDecimals;
                        }
                        else
                        {
                             $totalMinutes = $hours * 60;
                        }

                        return $totalMinutes;
                        }
                        function minutesToHours($minutes)
                            {
                                $hours          = floor($minutes / 60);
                                $decimalMinutes = $minutes - floor($minutes/60) * 60;

                            # Put it together.
                            $hoursMinutes = sprintf("%d:%02.0f", $hours, $decimalMinutes);
                            return $hoursMinutes;
                            }

                          
                        $nm=$_POST['txtdname'];
                        $tp=$_POST['txttropic'];
                        
                        $hr=$_POST['starttime'];
                        $tm=$_POST['endtime'];
                        $dur= date_create($hr)->diff(date_create($tm))->format('%H:%i');
                        $ex=explode(":",$dur);
                        

                            $name = $nm;
                            $sql="select * from staff where name like '%$nm%'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();

                            $sstdname = $nm;
                            /*$sssql="select * from sch where staffname like '%$nm' and active='1'";
                            $ssresult=$con->query($sssql);
                            $ssrow=$ssresult->fetch_assoc();*/

                         $ssql="select * from sal where name='sal'";
                         $sresult=$con->query($ssql);
                        $srow=$sresult->fetch_assoc();
                          $tol=$srow['sal'];
                         
                              $tol1=$tol/60;
                       
                          //echo $tol2;

                         $date=$_POST['txtdate'];
                       
                         

                       $sal=$tol1*hoursToMinutes($dur);
                        $tot1=hoursToMinutes($dur);
                        $staffid=$_POST['txtstaffid'];
                        $std=$_POST['year'];
                        $sub=$_POST['txtsubject'];
                        $salid=$_POST['txtid'];
                        $qrl="update salary set staffid='$staffid',name='$nm',topic='$tp',subject='$sub',starttime='$hr'
                        ,endtime='$tm',duration='$tot1',class='$std',sessiondate='$date',sal='$sal',active=1 where id='$salid'";
                        mysqli_query($con,$qrl); 
                        $msg=1;
                        echo "Updated..!!";

                             /*$datea=$_POST['txtdate'];
                              $datea=strtotime($datea);
                            $datea=date('Y-m-d',$datea);
                         $qrl1="update sch set attand='0' where schdate='$datea' and staffname='$nm'";
                        mysqli_query($con,$qrl1); 
                         echo "Updated..!!";
                         header("location:searchdetails.php");*/
}
                        ?>
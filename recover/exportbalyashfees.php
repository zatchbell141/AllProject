<?php
    include 'Conn.php';
    ob_start();
    $output='';
    if(isset($_POST['btnexport']))
    {
        $yrs1=$_POST['txtstudcoursename'];
        $admyrs=$_POST['txtadmyrs'];
        $output.='
        <table border="1">
        <tr>
             <th>SrNo</th>
             <th>PRN</th>
             <th>Student Name</th>
             <th>Year</th>
             <th>TMV Total</th>
             <th>TMV Paid</th>
             <th>TMV Balance</th>
             <th>Yash Total</th>
             <th>Yash Paid</th>
             <th>Yash Balance</th>
        </tr>';
         $sql="select * from studentdt where coursename='$yrs1' and admissionyrs='$admyrs' order by fullname ASC";
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                             $no++;
                                                            $stid=$row['fullname'];
                                                            $course=$row['coursename'];
                                                            $feesyrs=$row['feesplan'];
                                                            $yrs=$row['admissionyrs'];
                                                            
                                                            $feessql="select * from fees where name='$course'";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            
                                                            $recptmvsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='TMVFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recptmvresult=$con->query($recptmvsql);
                                                            $recptmvrow=$recptmvresult->fetch_assoc();
                                                            
                                                            $balance=$recprow['Total']-$recprow['Paid'];
                                                            
                                                            $balancetmv=$recptmvrow['Total']-$recptmvrow['Paid'];
                                                            
                                                            $bal1=0;
                                                            $balymv=0;
                                                            $bal=$balance;
                                                        if($recprow['Total']=="")
                                                        {
                                                            $tolfeessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeesresult=$con->query($tolfeessql);
                                                            $tolfeesrow=$tolfeesresult->fetch_assoc();
                                                            $bal1=$tolfeesrow['fees'];
                                                        }
                                                        else
                                                        {
                                                            $bal1=$balance;
                                                        }
                                                        
                                                        if($recptmvrow['Total']=="")
                                                        {
                                                            $tolfeestmvsql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeestmvresult=$con->query($tolfeestmvsql);
                                                            $tolfeestmvrow=$tolfeestmvresult->fetch_assoc();
                                                            $balymv=$tolfeestmvrow['tmvfees'];
                                                        }
                                                        else
                                                        {
                                                            $balymv=$balancetmv;
                                                        }
                                                               $output.=' 
                                                                <tr>
                                                                    <td>'.$no.'</td>
                                                                    <td>'.$row['prn'].'</td>
                                                                    <td>'.$row['fullname'].'</td>
                                                                    <td>'.$feesrow['year'].'</td>
                                                                    
                                                                    <td>'.$recptmvrow['Total'].'</td>
                                                                    <td>'.$recptmvrow['Paid'].'</td>
                                                                    <td>'.$balymv.'</td>
                                                                    
                                                                    <td>'.$recprow['Total'].'</td>
                                                                    <td>'.$recprow['Paid'].'</td>
                                                                    <td>'.$bal1.'</td>
                                                                    
                                                                </tr>';
                                                                
                                                            }
                                                        }
                                                       $output.='
                                                         </table>
                                                        '; 
                                                         header("Content-type: application/octet-stream"); 
                                            			 header("Content-Disposition: attachment; filename=YashBalanceSheet.xls"); 
                                            			 header("Pragma: no-cache"); 
                                            			 header("Expires: 0"); 
                                                         echo $output;
                                                         ob_end_flush();
    }
?>
<?php
include 'Conn.php';
ob_start();
$output='';
if(isset($_POST['export']))
{ 
    $no=0;
$output .='
                            <table border=1>
                               
                                    <tr>
                                     <th>Sr.No</th>
                                      <th>PRN</th>
                                        <th>Fullname</th>
                                        <th>Date Admission</th>
                                        <th>Course Name</th>
                                        <th>Admission Status</th>
                                        <th>Date Of Birth</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>States</th>
                                        <th>Pin Code</th>
                                         <th>Payment Type</th>
                                        <th>Total Fees</th>
                                        <th>Paid Fees</th>
                                        <th>Cheque No/UTRNo/Reference No</th>
                                        <th>Transfer Date</th>
                                        <th>Remitter Bank</th>
                                        <th>Beneficiary Bank</th>
                                    </tr>';
                    $sql="select DISTINCT a1.fullname ,a1.id ,a1.stdphoto,a1.prn,a1.fullname,a1.contact,a1.email,a1.state,a1.pin,a1.address,a1.date,a1.course,a1.addmissionstatus,a1.dob from addonline a1,receipt r1 where a1.admyrs='2020-2021 Year' and a1.fullname=r1.fullname and a1.course='Bachelor of Computer Applications-E-First Year' and a1.active='1' and r1.year='FYBCA' order by a1.prn asc";
                    $result=$con->query($sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row=$result->fetch_assoc())
                         {
                             $no++;
                             $path=$row['stdphoto'];
                                    $output .='
                                     <tr class="success">
                                   <td>'.$no.'</td>
                                   <td>'.$row['prn'].'</td>
                                    <td>'.$row['fullname'].'</td>
                                    <td>'.$row['date'].'</td>
                                    <td>'.$row['course'].'</td>
                                    <td>'.$row['addmissionstatus'].'</td>
                                    <td>'.$row['dob'].'</td>
                                    <td>'.$row['contact'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['address'].'</td>
                                    <td>'.$row['state'].'</td>
                                    <td>'.$row['pin'].'</td>
                                      
                                             </tr>
                                   
                        ';
                        $fullname=$row['fullname'];
                         $feessql="select * from receipt where year='FYBCA' and FullName='$fullname'";
                    $feesresult=$con->query($feessql);
                    if(mysqli_num_rows($feesresult)>0)
                    {
                        while($feesrow=$feesresult->fetch_assoc())
                         {
                            $output.='
                            <tr class="success">
                            <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    
                                    <td>'.$feesrow['PaymentType'].'</td>
                                    <td>'.$feesrow['Total'].'</td>
                                    <td>'.$feesrow['Paid'].'</td>
                                    <td>`'.$feesrow['ChequeNo'].'</td>
                                    <td>'.$feesrow['ChequeDate'].'</td>
                                    <td>'.strtoupper($feesrow['Bank']).'</td>
                                    <td>'.strtoupper($feesrow['ben']).'</td>
                            </tr>
                                    ';
                         }
                    }
                         }
                    }
                    $output.=' </table>';
                    header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=FYOnlineAdmission.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
}
?>
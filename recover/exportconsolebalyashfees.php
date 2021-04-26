<?php
    include 'Conn.php';
    ob_start();
    $output='';
    if(isset($_POST['btnconsoleexport']))
    { 
        $yrs1=$_POST['txtstudcoursename'];
        $admyrs=$_POST['txtadmyrs'];
    
        $output.='
        <table border="1">
        <tr>
             <th>SrNo</th>
             <th>PRN</th>
             <th>Student Name</th>
             <th>Payment Type</th>
             <th>TMV Total</th>
             <th>TMV Paid</th>
             <th>Cheque No/UTRNO/Reference No</th>
             <th>Transfer Date</th>
             <th>Bank Name</th>
        </tr>';
        $sql="select * from studentdt where active='1' and admissionyrs='$admyrs' and coursename='$yrs1' ORDER BY studentid DESC";
        $result=$con->query($sql);
        if($result->num_rows>0)
        {  $no=0;
            while($row=$result->fetch_assoc())
            {
                $no++;
                $fullname=$row['fullname'];
                $year=$row['coursename'];
                                                            
                $Yearsql="select * from fees where name='$year'";
                $Yearresult=$con->query($Yearsql);
                $Yearrow=$Yearresult->fetch_assoc();
                $year2=$Yearrow['year'];
                
                
                
                
                
                $output.='
                 <tr class="success">
                    <td>'.$no.'</td>
                    <td>'.$row['fullname'].'</td>
                    <td>'.$year2.'</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            ';
            
                 $tolreceiptsql="select * from receipt where Receipttype='BCAFEES' and FullName='$fullname'and year='$year2' ";
        $tolreceiptresult=$con->query($tolreceiptsql);
        if($tolreceiptresult->num_rows>0)
        {  $no=0;
            while($tolreceiptrow=$tolreceiptresult->fetch_assoc())
            {
                 $output.='
                 <tr class="success">
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>'.$tolreceiptrow['PaymentType'].'</td>
                 <td>'.$tolreceiptrow['Total'].'</td>
                 <td>'.$tolreceiptrow['Paid'].'</td>
                 <td>'.$tolreceiptrow['ChequeNo'].'</td>
                 <td>'.$tolreceiptrow['ChequeDate'].'</td>
                 <td>'.$tolreceiptrow['Bank'].'</td>
                 </tr>
            ';
            }
        }
            
            
            }
        }  
    $output.='
        </table>
    '; 
        header("Content-type: application/octet-stream"); 
        header("Content-Disposition: attachment; filename=BCAReceiptWiseBalanceSheet.xls"); 
        header("Pragma: no-cache"); 
        header("Expires: 0"); 
        echo $output;
        ob_end_flush();
    }
?>
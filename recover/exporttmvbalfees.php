<?php
    include 'Conn.php';
    ob_start();
    $output='';
    if(isset($_POST['btnexport']))
    {
        $output.='<table border="1">
        <tr>
            <th>Sr.No</th>
            <th>Student Name</th>
            <th>Year</th>
            <th>Total</th>
            <th>Paid</th>
            <th>Balance</th>
        </tr>';
        $sql="select * from studentdt where active='1' ORDER BY studentid DESC";
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
                
        $tolreceiptsql="select * from receipt where Receipttype='TMVFEES' and FullName='$fullname'and year='$year2' ";
        $tolreceiptresult=$con->query($tolreceiptsql);
        $tolreceiptrow=$tolreceiptresult->fetch_assoc();
                                                    
        $paidfeessql="select SUM(Paid) as Paid from receipt where Receipttype='TMVFEES' and FullName='$fullname' and Year='$year2'";
        $paidfeesresult=$con->query($paidfeessql);
        $paidfeesrow=$paidfeesresult->fetch_assoc();
         
            $output.='
                 <tr class="success">
                    <td>'.$no.'</td>
                    <td>'.$row['fullname'].'</td>
                    <td>'.$year2.'</td>
                    <td>'.$tolreceiptrow['Total'].'</td>
                    <td>'.$paidfeesrow['Paid'].'</td>
                    <td>'.$bal.'</td>
                </tr>
            ';
            }
        }
         $output.='
             </table>
            '; 
             header("Content-type: application/octet-stream"); 
			 header("Content-Disposition: attachment; filename=TMVBalanceFeesReport.xls"); 
			 header("Pragma: no-cache"); 
			 header("Expires: 0"); 
             echo $output;
             ob_end_flush();
    }
?>
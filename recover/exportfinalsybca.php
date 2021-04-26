<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                  if(isset($_POST['btnexport']))
                  {
                      $name='0';
                      
                      $output.='
                    <table border="1">
                    <tr>
                        <th colspan="11"><b style="color:red">SYBCA Final Admission Report</b></th>
                    </tr>
                                        	<tr>
                                        		<th>Sr.No</th>
                                        		<th>Student Name</th>
                                        		<th>Year</th>
                                        		<th>Receipt No</th>
                                        		<th>Date</th>
                                        		<th>Total FEES</th>
                                        		<th>FEES</th>
                                        		<th>Paid FEES</th>
                                        		<th>Balance FEES</th>
                                        		<th>Total Balance</th>
                                                <th>Admission Year</th>
                                        	</tr>';
                                        	
                                                    include 'Conn.php';
                                                    $sql="select * from studentdt where active='1' and coursename='Bachelor of Computer Applications- R- Second Year' or coursename='Bachelor of Computer Applications- R- Direct Second' ORDER BY studentid DESC";
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {  $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            
                                                            
                                                           
                                       $output.='
                                        	<tr>
                                        		<td>'. $no.'</td>
                                        		<td><b>'. $row['fullname'].'</b></td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        	    <td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        	</tr>
                                        	';
                                                $name=$row['fullname'];
                                                 $rsql="select * from receipt where FullName='$name' and Receipttype='TMVFEES' and year='SYBCA' or year='Bachelor of Computer Applications- R- Second Year'";
                                                    $rresult=$con->query($rsql);
                                                    if($rresult->num_rows>0)
                                                    {  
                                                        while($rrow=$rresult->fetch_assoc())
                                                        {
                                                     
                                            
                                            $output.='
                                           <tr style="color:blue">
                                                <td>&nbsp;</td>
                                                <td  style="text-align: right;"><b>TMV FEES</b></td>
                                                <td>'. $rrow['Year'].'</td>
                                                <td>'. $rrow['ReceiptNewNo'].'</td>
                                                <td>'. $rrow['Date'].'</td>
                                                <td>&nbsp;</td>
                                                <td>'. $rrow['Total'].'</td>
                                                <td>'. $rrow['Paid'].'</td>
                                                <td>'. $rrow['Balance'].'</td>
                                                <td>&nbsp;</td>
                                                <td>'. $rrow['ReceiptMode'].'</td>
                                            </tr>
                                            ';
                                        }
                                    }
                                        
                                        		$name=$row['fullname'];
                                        		 $rbcsql="select * from receipt where FullName='$name' and Receipttype='BCAFEES' and year='SYBCA' ";
                                                    $rbcresult=$con->query($rbcsql);
                                                    if($rbcresult->num_rows>0)
                                                    {  
                                                        while($rbcrow=$rbcresult->fetch_assoc())
                                                        {
                                                     
                                        $output.='
                                        	<tr style="color:green">
                                        		<td>&nbsp;</td>
                                        		<td  style="text-align: right;"><b>YASH FEES</b></td>
                                        		<td>'. $rbcrow['Year'].'</td>
                                        		<td>'. $rbcrow['ReceiptNewNo'].'</td>
                                        		<td>'. $rbcrow['Date'].'</td>
                                        		<td>&nbsp;</td>
                                        		<td>'. $rbcrow['Total'].'</td>
                                        		<td>'. $rbcrow['Paid'].'</td>
                                        		<td>'. $rbcrow['Balance'].'</td>
                                        		<td>&nbsp;</td>
                                                <td>'. $rbcrow['ReceiptMode'].'</td>
                                        	</tr>
                                        	
                                        	';
                                        	
                                        }
                                    }
                                    $name=$row['fullname'];
                                    $totalfeessql="select SUM(Paid) as Paid,Total from receipt where FullName='$name' and Receipttype='TMVFEES' and year='SYBCA'";
                                    $totalfeesresult=$con->query($totalfeessql);
                                    $totalfeesrow=$totalfeesresult->fetch_assoc();
                                                            
                                    $totalfeesclsql="select SUM(Paid) as Paid,Total from receipt where FullName='$name' and Receipttype='BCAFEES' and year='SYBCA'";
                                    $totalfeesclresult=$con->query($totalfeesclsql);
                                    $totalfeesclrow=$totalfeesclresult->fetch_assoc();
                                                            
                                    $bal=$totalfeesrow['Total']-$totalfeesrow['Paid'];
                                    $balcl=$totalfeesclrow['Total']-$totalfeesclrow['Paid'];
                                    $tol=$totalfeesrow['Total']+$totalfeesclrow['Total'];
                                    $tolbal=$bal+$balcl;
                                    $output.='
                                       <tr style="color:red">
                                        <td>&nbsp;</td>
                                        <td><b>'. $row['fullname'].'</b></td>
                                        <td>'. $row['coursename'].'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>'.$tol.'</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>'.$tolbal.'</td>
                                        </tr>
                                    ';
                                }
                                    }
                                                        
                                        
                                        $output.='</table>';
                    header("Content-type: application/octet-stream"); 
					header("Content-Disposition: attachment; filename=SybcaFinalReport.xls"); 
					header("Pragma: no-cache"); 
					header("Expires: 0"); 
                    echo $output;
                    ob_end_flush();
                  }
?>
<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                  if(isset($_POST['btnexport']))
                  {
                      $name='0';
                      
                      $output.='<table border="1">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Name</th>
                                                    <th>Year</th>
                                                    <th>Receipt No</th>
                                                    <th>Date</th>
                                                    <th>Fees</th>
                                                    <th>Total Fees</th>
                                                    <th>Paid Fees</th>
                                                    <th>Balance</th>
                                                    <th>Total Balance</th>
                                                    <th>Receipt Mode</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                              include 'Conn.php';
                                                    $sql="select * from studentdt where active='1' ORDER BY studentid DESC";
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {  $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            	$name=$row['fullname'];
                                        		 $rbcsql="select * from receipt where FullName='$name' and Receipttype='BCAFEES'";
                                                    $rbcresult=$con->query($rbcsql);
                                                    if($rbcresult->num_rows>0)
                                                    {  
                                                        while($rbcrow=$rbcresult->fetch_assoc())
                                                        {
                                                            $bcafeessql="select SUM(Paid) as Paid,Total from receipt where FullName='$name' and Receipttype='BCAFEES'";
                                                            $bcafeesresult=$con->query($bcafeessql);
                                                            $bcafeesrow=$bcafeesresult->fetch_assoc();  
                                                            $balancebca=$bcafeesrow['Total']-$bcafeesrow['Paid'];   
                                                    $output.='
                                                        	<tr class="success">
                                        	     <td>'. $no.'</td>
                                        	    <td>'. $row['fullname'].'</td>
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
                                                $output.='
                                                    <tr class="danger">
                                        	    <td>&nbsp;</td>
                                        	   <td>'.$row['fullname'].'</td>
                                        	    <td>&nbsp;</td>
                                        	    <td>&nbsp;</td>
                                        	    <td>Total:</td>
                                        	    <td><b>'.$bcafeesrow['Total'].'</b></td>
                                        	    <td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		 <td><b>'. $balancebca.'</b></td>
                                        		<td>&nbsp;</td>
                                        	</tr>
                                                ';
                                                        }
                                                    }
                                                    $output.='  </tbody>
                                        </table>';
                                         header("Content-type: application/octet-stream"); 
					header("Content-Disposition: attachment; filename=BcaFeesReport.xls"); 
					header("Pragma: no-cache"); 
					header("Expires: 0"); 
                    echo $output;
                    ob_end_flush();
                  }
?>
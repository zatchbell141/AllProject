<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                  if(isset($_POST['btnexport']))
                  {
                      $output.='<table  border="1">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Name</th>
                                                    <th>Year</th>
                                                    <th>PRN</th>
                                                    <th>TRN</th>
                                                    <th>Receipt No</th>
                                                    <th>Date</th>
                                                    <th>Fees</th>
                                                    <th>Paid Fees</th>
                                                    <th>Balance</th>
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
                                                            $output.='
                                                            	<tr>
                                        	     <td>'. $no.'</td>
                                        	   <td>'. $row['fullname'].'</td>
                                        	    <td>'. $rbcrow['Year'].'</td>
                                        	    <td>'. $row['prn'].'</td>
                                        	    <td>'. $row['trn'].'</td>
                                        	    <td>'. $rbcrow['ReceiptNewNo'].'</td>
                                        	    <td>'. $rbcrow['Date'].'</td>
                                        	    <td>'. $rbcrow['Total'].'</td>
                                        		<td>'. $rbcrow['Paid'].'</td>
                                        		<td>'. $rbcrow['Balance'].'</td>
                                        		<td>'. $rbcrow['ReceiptMode'].'</td>
                                        	</tr>
                                                            ';
                                                            
                                                        }
                                                    }
                                                    
                                                        }
                                                    }
                      $output.='</table>';
                                     header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=YashFeesReorts.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                  }
?>
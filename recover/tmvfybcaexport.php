<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                  if(isset($_POST['btnexport']))
                  {
                      $output.=' <table border="1">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Name</th>
                                                    <th>Year</th>
                                                    <th>PRN</th>
                                                    <th>TRN</th>
                                                    <th>TMV Fees</th>
                                                    <th>Paid Fees</th>
                                                    <th>UTR No</th>
                                                    <th>Transcation Date</th>
                                                    <th>Remitter Bank</th>
                                                    <th>Benificary Bank</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                            include 'Conn.php';
                                                    $sql="select * from studentdt where active='1' ORDER BY fullname ASC";
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {  $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            $name=$row['fullname'];
                                        		 $rbcsql="select * from receipt where FullName='$name' and Receipttype='TMVFEES'";
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
                                        	    <td>'. $rbcrow['Total'].'</td>
                                        		<td>'. $rbcrow['Paid'].'</td>
                                        		<td>'. $rbcrow['ChequeNo'].'</td>
                                        		<td>'. $rbcrow['ChequeDate'].'</td>
                                        		<td>'. $rbcrow['Bank'].'</td>
                                        		<td>'. $rbcrow['ben'].'</td>
                                        		<td>'. $rbcrow['Balance'].'</td>
                                        	</tr>
                                                            ';
                                                        }
                                                    }
                                                        }
                                                    }
                      $output.='</table>';
                                     header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=TmvFeesReport.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                  }
?>
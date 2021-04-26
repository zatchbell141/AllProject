<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                  if(isset($_POST['export']))
                {
                  $sql="select * from receipt ORDER BY id DESC";
                    $result=$con->query($sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        $output .='
                            <table>
                               
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>PRN</th>
                                         <th>TRN</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Balance</th>
                                        <th>Paid</th>
                                        <th>Payment Type</th>
                                        <th>Cheque No</th>
                                        <th>Cheque Date</th>
                                         <th>Bank</th>
                                        <th>Year</th>
                                        <th>Sem</th>
                                    </tr>
                                                          

                        ';
                        while($row=$result->fetch_assoc())
                                        {
                                            
                                           $output.='
                                            
                                            <tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td> '.$row['PRN'].'</td>
                                             <td> '.$row['TRN'].'</td>
                                            <td>'. $row['date'].'</td>
                                            <td>'. $row['total'].'</td>
                                            <td>'. $row['balance'].'</td>
                                            <td>'. $row['paid'].'</td>
                                            <td>'. $row['payment'].'</td>
                                            <td>'. $row['chequeno'].'</td>
                                            <td>'. $row['chequedate'].'</td>
                                            <td>'. $row['bank'].'</td>
                                            <td>'. $row['year'].'</td>
                                            <td>'. $row['sem'].'</td>
                                            </tr>
                                           
                                           ';
                                        }
                                        $output .='</table>';
                                       
                                        header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=receiptdetails.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                    }

                }
?>
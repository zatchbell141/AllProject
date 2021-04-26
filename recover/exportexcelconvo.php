<?php
                  include 'Conn.php';
                  ob_start();
                  
                  $output='';
                  $output .='
                            <table border=1>
                               
                                    <tr>
                                     
                                          <th>Sr.No</th>
                                          <th>PRN</th>
                                          <th>SEAT NO</th>
                                          <th>NAME</th>
                                          <th>IN PERSON</th>
                                          <th>BY POST</th>
                                          <th>FEES</th>
                                          <th>UTR Number</th>
                                          <th>Bank Name</th>
                                          <th>Exam Event</th>
                                    </tr>
                                                          

                        ';
                         if(isset($_POST['export']))
                            {
                                
                               $enddate=$_POST['std'];
                               $std=$_POST['endd'];
                              include 'Conn.php';
                                 $sql="select * from receipt where Receipttype='BCACONVOCATION' and Date between '$enddate' and '$std' order by PRN ASC";
                                 $result=$con->query($sql);
                                 $int=0;
                                 $postper=0;
                                 $postperson=0;
                                 if($result->num_rows>0)
                                  {
                                     while($row=$result->fetch_assoc())
                                       {
                                            $int++;  
                                            $post=$row['decp'];
                                            if($post=="By Post"){
                                               $postper="By Post";
                                            }
                                            else{
                                                $postper=' ';
                                            }
                                            if($post=="In Person"){
                                               $postperson="In Person";
                                            }
                                            else{
                                                $postperson=' ';
                                            }
                                            $output.='
                                             <tr>
                                               <td>'.$int.'</td>
                                               <td>`'.$row['PRN'].'</td>
                                               <td>'.$row['SeatNO'].'</td>
                                               <td>'.$row['FullName'].'</td>
                                               <td>'.$postperson.'</td>
                                               <td>'.$postper.'</td>
                                               <td>'.$row['Paid'].'</td>
                                               <td>'.$row['ChequeNo'].'</td>
                                               <td>'.$row['Bank'].'</td>
                                               <td>'.$row['examyrs'].'</td>
                                            </tr>
                                            ';
                                       }
                                  }
                                        $output.='</table>';        
                                        header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=TMVConvocationReport.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                    }

              

?>
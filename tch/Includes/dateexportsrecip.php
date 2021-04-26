<?php
                 
                                          
                  include 'Conn.php';
                  ob_start();
                  $output='';
                  if(isset($_POST['submit']))
                {
                     $datef=$_POST['form'];
                  $datet=$_POST['to'];
                  $datet=strtotime($datet);
                   $datet=date('Y-m-d',$datet);
                                       

                                             $datef=strtotime($datef);
                                             $datef=date('Y-m-d',$datef);
                  $sql="select * from receipt where Date BETWEEN '".$datef."' AND '".$datet."' and active='1'";
                    $result=$con->query($sql);
                    
                   
                                    $fsql="select SUM(Paid) As CashTotal from receipt where  Date BETWEEN '".$datef."' AND '".$datet."' and active='1' and PaymentType='Cash'";
                                    $fresult=$con->query($fsql);
                                    $frow=$fresult->fetch_assoc();
           
                                
                                    $lfsql="select SUM(Late) As Latefees from receipt where  Date BETWEEN '".$datef."' AND '".$datet."' and active='1'";
                                    $lfresult=$con->query($lfsql);
                                    $lfrow=$lfresult->fetch_assoc();
                                
                                    include 'Conn.php';
                                    $csql="select SUM(Paid) As ChequeTotal from receipt where  Date BETWEEN '".$datef."' AND '".$datet."' and active='1' and PaymentType='Cheque'";
                                    $cresult=$con->query($csql);
                                    $crow=$cresult->fetch_assoc();
           
                                    include 'Conn.php';
                                    $mtsql="select SUM(Paid) As MT from receipt where  Date BETWEEN '".$datef."' AND '".$datet."' and active='1' and PaymentType='MT'";
                                    $mtresult=$con->query($mtsql);
                                    $mtrow=$mtresult->fetch_assoc();
                                    
                                     include 'Conn.php';
                                    $ntsql="select SUM(Paid) As NEFT from receipt where  Date BETWEEN '".$datef."' AND '".$datet."' and active='1' and PaymentType='NEFT'";
                                    $ntresult=$con->query($ntsql);
                                    $ntrow=$ntresult->fetch_assoc();
                                    
                                    include 'Conn.php';
                                    $tsql="select SUM(Paid) As Total from receipt where  Date BETWEEN '".$datef."' AND '".$datet."' and active='1'";
                                    $tresult=$con->query($tsql);
                                    $trow=$tresult->fetch_assoc();
                                    
                                    
                                    
                    if(mysqli_num_rows($result)>0)
                    {
                        $output .='
                            <table border=1>
                               
                                    <tr>
                                     
                                      <th>Account Head</th>
                                      <th>Date</th>
                                      <th>Code</th>
                                       <th>Name</th>
                                       <th>Payment Type</th>
                                       <th>Late Fees</th>
                                          <th>Cash Amount</th>
                                            <th>Cheque Amount</th>
                                             <th>MT Amount</th>
                                            <th>NEFT Amount</th>
                                          <th>Cheque No</th>
                                        <th>Cheque Date</th>
                                         <th>Bank</th>
                                        <th>Receipt No</th>
                                         <th>PRN</th>
                                         <th>Year</th>
                                        <th>Sem</th>
                                         <th>TRN</th>
                                    </tr>
                                                          

                        ';
                        while($row=$result->fetch_assoc())
                                        {
                                               $Date=$row['Date'];
                                             $Date=strtotime($Date);
                                             $Date=date('d-m-Y',$Date);
                                             $Pay=$row['PaymentType'];
                                            if($Pay=='Cash')
                                            {
                                                 $amt=$row['Paid'];
                                               
                                            }
                                            else
                                            {
                                                 $amt= '0';
                                            }
                                              $Payc=$row['PaymentType'];
                                            if($Pay=='Cheque')
                                            {
                                                $amtc=$row['Paid'];
                                             
                                            }
                                            else
                                            {
                                                $amtc= '0';
                                            }
                                    
                                            $amte=$row['PaymentType'];
                                            if($Pay=='Cash')
                                            {
                                                 $amte='0000-00-00';
                                               
                                            }
                                            else
                                            {
                                                 $amte= $row['ChequeDate'];
                                            }
                                 
                                    
                                            if($Pay=='MT')
                                            {
                                                 $amtmt=$row['Paid'];
                                               
                                            }
                                            else
                                            {
                                                 $amtmt= '0';
                                            }
                                              $Payc=$row['PaymentType'];
                                            if($Pay=='NEFT')
                                            {
                                                $amtneft=$row['Paid'];
                                             
                                            }
                                            else
                                            {
                                                $amtneft= '0';
                                            }
           
           
                                           $output.='
                                            
                                            <tr>
                                            <td>'.$row['Receipttype'].'</td>
                                              <td>'. $Date.'</td>
                                              <td>Code</td>
                                              <td>'.$row['FullName'].'</td>
                                              <td>'. strtoupper($row['PaymentType']).'</td>
                                               <td>'. $row['Late'].'</td>
                                               <td>'. $amt.'</td>
                                               <td>'. $amtc.'</td>
                                                <td>'. $amtmt.'</td>
                                               <td>'. $amtneft.'</td>
                                               <td>'."'".$row['ChequeNo'].'</td>
                                            <td>'. $amte.'</td>
                                            <td>'. $row['Bank'].'</td>
                                            <td>'.$row['ReceiptNewNo'].'</td>
                                             <td> '.$row['PRN'].'</td>
                                             <td>'. $row['Year'].'</td>
                                            <td>'. $row['Sem'].'</td>
                                             <td> '.$row['TRN'].'</td>
                                            </tr>
                                          
                                           ';
                                          
                                        }
                                         $datetotal=$trow['Total']+$lfrow['Latefees'];
                                        $output .='
                                         <tr>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td><b>Total:</b></td>
                                           <td><b>'.$lfrow['Latefees'].'</b></td>
                                           <td><b>'.$frow['CashTotal'].'</b></td>
                                           <td><b>'.$crow['ChequeTotal'].'</b></td>
                                           <td><b>'.$mtrow['MT'].'</b></td>
                                           <td><b>'.$ntrow['NEFT'].'</b></td>
                                            <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td> <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           </tr>
                                           <tr>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td><b>GR Total:</b></td>
                                          
                                           <td><b>'.$datetotal.'</b></td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td> <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           </tr>
                                        
                                        </table>';
                                       
                                        header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=DateShotdetails.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                    }

                }
?>
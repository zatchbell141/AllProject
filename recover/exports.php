<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                  if(isset($_POST['export']))
                {
                    
                  $sql="select * from receipt where active='1' ORDER BY id ASC";
                    $result=$con->query($sql);
                    
                    
                                    $fsql="select SUM(Paid) As CashTotal from receipt where active='1' and PaymentType='Cash'";
                                    $fresult=$con->query($fsql);
                                    $frow=$fresult->fetch_assoc();
           
                                
                                    include 'Conn.php';
                                    $csql="select SUM(Paid) As ChequeTotal, SUM(Late) as Chquetotal from receipt where active='1' and PaymentType='Cheque'";
                                    $cresult=$con->query($csql);
                                    $crow=$cresult->fetch_assoc();
           
                                
                                    include 'Conn.php';
                                    $tsql="select SUM(Paid) As Total, SUM(Late) as latetotal from receipt where active='1'";
                                    $tresult=$con->query($tsql);
                                    $trow=$tresult->fetch_assoc();
                                    
                                    include 'Conn.php';
                                    $tmtsql="select SUM(Paid) As MT, SUM(Late) as latemt from receipt where active='1' and PaymentType='MT'";
                                    $tmtresult=$con->query($tmtsql);
                                    $tmtrow=$tmtresult->fetch_assoc();
                                    
                                    include 'Conn.php';
                                    $tneftsql="select SUM(Paid) As NEFT, SUM(Late) as lateneft from receipt where active='1' and PaymentType='NEFT'";
                                    $tneftresult=$con->query($tneftsql);
                                    $tneftrow=$tneftresult->fetch_assoc();
                    
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
                                       <th>NFET Amount</th>
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
                                             $Date=date('m-d-Y',$Date);
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
                                            if($Pay=='MT')
                                            {
                                                $amtmt=$row['Paid'];
                                             
                                            }
                                            else
                                            {
                                                $amtmt= '0';
                                            }
                                             if($Pay=='NEFT')
                                            {
                                                $amtneft=$row['Paid'];
                                             
                                            }
                                            else
                                            {
                                                $amtneft= '0';
                                            }
                                            $amte=$row['PaymentType'];
                                            if($Pay=='Cash')
                                            {
                                                 $amte='0';
                                               
                                            }
                                            else
                                            {
                                                 $amte= $row['ChequeDate'];
                                            }
                                           $grtotal=$trow['latetotal']+$frow['CashTotal']+$crow['ChequeTotal']+$tmtrow['MT']+$tneftrow['NEFT'];
                                           $output.='
                                            
                                            <tr>
                                            <td>'.$row['Receipttype'].'</td>
                                               <td>'.$Date.'</td>
                                              <td>'.$row['code'].'</td>
                                              <td>'.$row['FullName'].'</td>
                                             
                                               <td>'. strtoupper($row['PaymentType']).'</td>
                                                <td>'.$row['Late'].'</td>
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
                                        $output .='
                                          <tr>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            
                                           <td><b>Total:</b></td>
                                           <td><b>'.$trow['latetotal'].'</b></td>
                                           <td><b>'.$frow['CashTotal'].'</b></td>
                                           <td><b>'.$crow['ChequeTotal'].'</b></td>
                                           <td><b>'.$tmtrow['MT'].'</b></td>
                                           <td><b>'.$tneftrow['NEFT'].'</b></td>
                                            <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                         
                                           </tr>
                                           <tr>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td><b>GR Total:</b></td>
                                          
                                           <td><b>'.$grtotal.'</b></td>
                                          <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           <td>&nbsp;</td>
                                           </tr>
                                        </table>';
                                      $output.='
                                      <br>
                                      <table border="1">
                                      <tr>
                                        <th>Account Head</th>
                                        <th>Cash</th>
                                        <th>Cheque</th>
                                       
                                      </tr>
                                      ';
                                       include 'Conn.php';
                                    $tsql="SELECT Receipttype,SUM(Paid) As Cash FROM receipt where active=1 and PaymentType='Cash' GROUP BY Receipttype";
                                    $tresult=$con->query($tsql);
                                   
                                    
                                    $chsql="SELECT Receipttype,SUM(Paid) As Cheque FROM receipt where active=1 and PaymentType='Cheque' GROUP BY Receipttype";
                                    $chresult=$con->query($chsql);
                                    
                                    $mtsql="SELECT Receipttype,SUM(Paid) As MT FROM receipt where active=1 and PaymentType='MT' GROUP BY Receipttype";
                                    $mtresult=$con->query($mtsql);
                                    
                                    $neftsql="SELECT Receipttype,SUM(Paid) As NEFT FROM receipt where active=1 and PaymentType='NEFT' GROUP BY Receipttype";
                                    $neftresult=$con->query($neftsql);
                                    
                                    while($chrow=$chresult->fetch_assoc())
                                    {
                                        $neftrow=$neftresult->fetch_assoc();
                                        $mtrow=$mtresult->fetch_assoc();
                                    if(mysqli_num_rows($chresult)>0)
                                    {
                                          while($trow=$tresult->fetch_assoc())
                                         {
                                           
                                       
                                           $output.='
                                           <tr>
                                           <td>'.$trow['Receipttype'].'</td>
                                           <td>'.$trow['Cash'].'</td>                                          
                                          <td>'.$chrow['Cheque'].'</td>
                                           ';
                                         
                                         }
                                         
                                    }
                    }
                    
                                    $shsql="SELECT SUM(Paid) As Cash , SUM(Late) as late FROM receipt where active=1 and PaymentType='Cash'";
                                    $shresult=$con->query($shsql);
                                    $shrow=$shresult->fetch_assoc();
                                    
                                     $Hrsql="SELECT SUM(Paid) As Cheque , SUM(Late) as late FROM receipt where active=1 and PaymentType='Cheque'";
                                    $Hrresult=$con->query($Hrsql);
                                    $Hrrow=$Hrresult->fetch_assoc();
                                    
                                    $grsql="SELECT SUM(Paid) As Total , SUM(Late) as late FROM receipt where active=1";
                                    $grresult=$con->query($grsql);
                                    $grrow=$grresult->fetch_assoc();
                               $output .='
                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>'.$shrow['Cash'].'</b></td>
                                    <td><b>'.$Hrrow['Cheque'].'</b></td>
                                </tr>
                               <tr>
                               <td><b>Gr.Total</b></td>
                               <td><b>'.$grrow['Total']+$grrow['late'].'</b></td>
                               </tr>
                               </table>';
                                        header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=receiptdetails.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                    }

                }
?>
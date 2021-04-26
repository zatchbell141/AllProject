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
      <th>NAME OF STUDENT</th>
      <th>BACKLOG</th>
      <th>SUBJECT</th>
      <th>EXT</th>
      <th>INT</th>
      <th>PRAC/PROJECT</th>
      <th>FEES</th>
      <th>LATE FEES</th>
      <th>Change of exam center Fees</th>
      <th>TMV Transfer Fees</th>
      
                                    </tr>
                                                          

                        ';
                  if(isset($_POST['export']))
                {
                    $std=$_POST['std'];
                  $endd=$_POST['endd'];
               
                  include 'Conn.php';
   $sql="SELECT b1.seat,b1.fullname,b1.subcode,b1.subname,b1.prn,b1.inter,b1.exter,b1.pract,b2.bank,b2.paid,b2.fees,b2.cfees,b2.lfees,b2.paymenttype,b2.cnmode,b2.chdate,b2.chqno,b2.rbank , b2.date from backlog b1,backfees b2 where b2.studentid=b1.studentid and b2.date=b1.date and b1.date BETWEEN '".$std."' and '".$endd."' group by b1.studentid order by b1.prn asc";
     $bresult=$con->query($sql);
     $int=0;
     
     if($bresult->num_rows>0)
      {
         while($brow=$bresult->fetch_assoc())
           {
                $int++;    

                        $paidt+=$brow['paid'];
                        $lfeest+=$brow['lfees'];
                        $cfeest+=$brow['cfees'];
                        $ftm=$brow['paid'];
                        $ftmtmv=$brow['paid'];
                    		$payt=$brow['paymenttype'];
                    		if($payt=='TMV Fees'){
                    		     $ftm='0';
                    		}
                    		else
                    		{
                    		   $ftm;  
                    		}
                    		
                    		$payttmv=$brow['paymenttype'];
                    		if($payttmv=='TMV Fees'){
                    		      $ftmtmv; 
                    		}
                    		else
                    		{
                    		  
                    		   $ftmtmv='0';
                    		}
                    		
                                           $output.='
                                            
                                            <tr>
                                            <td>'.$int.'</td>
                                               <td>'.$brow['prn'].'</td>
                                              <td>'.$brow['seat'].'</td>
                                              <td>'.$brow['fullname'].'</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            <td>'.$ftm.'</td>
                                            <td>'.$brow['lfees'].'</td>
                                            <td> '.$brow['cfees'].'</td>
                                             <td> '.$ftmtmv.'</td>
                                            </tr>
                                           
                                           ';
                                        
                                       include 'Conn.php';
                                   $sql="select * from backlog where fullname='".$brow['fullname']."' and seat='".$brow['seat']."' order by subcode ASC";
                                     $result=$con->query($sql);
                                     if($result->num_rows>0)
                                      {
                                         while($row=$result->fetch_assoc())
                                           {
                                            $output .='
                                <tr>
                                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                                    <td>'.$row['subcode'].'</td>
                                    <td>'.$row['subname'].'</td>
                                    <td>'.$row['exter'].'</td>
                                    <td>'.$row['inter'].'</td>
                                    <td>'.$row['pract'].'</td>
                                    <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>

                               </tr>';
                          
        
                                          
                                         }
                                      
                                    }
                    }

                    }
                  include 'Conn.php';
   $fsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees where date BETWEEN '".$std."' and '".$endd."'";
     $fresult=$con->query($fsql);
    $frow=$fresult->fetch_assoc();
    
    
    $ftmvsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees where date BETWEEN '".$std."' and '".$endd."' and paymenttype='TMV Fees'";
    $ftmvresult=$con->query($ftmvsql);
    $ftmvrow=$ftmvresult->fetch_assoc();
    
    $paidtmvfees=$ftmvrow['paid'];
                $tol=$frow['paid']+$frow['lfees']+$frow['cfees']-$paidtmvfees;
               /*$tol=$paidt+$lfeest+$cfeest;*/
               
               $paidtmvfeessub=$frow['paid']-$paidtmvfees;
               
            $output.='
    <tr>
      <td colspan="7"  rowspan="2">&nbsp;</td>
      <td align="right"><b>Total</b></td>
      <td><b>'.$paidtmvfeessub.' </b></td>
      <td><b>'.$frow['lfees'].'</b></td>
      <td><b>'.$frow['cfees'].'</b></td>
      <td><b>'.$frow['cfees'].'</b></td>
      <td><b>'.$ftmvrow['paid'].'</b></td>
    </tr>
    <tr>
      
      <td align="right"><b>Gr.Total</b></td>
      <td colspan="3" align="center"><b>'.$tol.'</b></td>
      <td  align="center"><b>'.$paidtmvfees.'</b></td>
    </tr>';
                          $output.='</table>';        
                    header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=TMVBacklogReport.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                    }

              

?>
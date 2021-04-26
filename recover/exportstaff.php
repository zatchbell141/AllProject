<?php
if(isset($_POST['export']))
{
				 include 'Conn.php';
                  ob_start();
                  $output='';
                   $form=$_POST['formtxt'];
                   $form=strtotime($form);
                   $form=date('Y-m-d',$form);
                                       
                                      $to=$_POST['totxt'];
                                      $to=strtotime($to);
                                      $to=date('Y-m-d',$to);

                  $sql="select * from salary WHERE sessiondate BETWEEN '".$form."' AND '".$to."' and active=1 ORDER BY subject ASC";
                    $result=$con->query($sql);
                  
                    if(mysqli_num_rows($result)>0)
                    {
                        $output .='
                            <table border="1">
                               
                                    <tr>
                                        <th>Staff Id</th>
                                        <th>Name</th>
                                        <th>Tropic</th>
                                        <th>Subject</th>
                                        <th>Start Lecture Time</th>
                                        <th>End Lecture Time</th>
                                        <th>Duration</th>
                                        <th>Year</th>
                                        <th>Session Date</th>
                                        <th>Salary</th>
                                   		
                                    </tr>
                                                          

                        ';
                         while($row=$result->fetch_assoc())
                                        {
                                        	include 'Conn.php';
                                           		$ssql="select SUM(duration) As Hours, SUM(sal) As Salary, name,class from salary where subject='".$row['subject']."' and sessiondate BETWEEN '".$form."' AND '".$to."' and active=1 ORDER BY sessiondate ASC";
                    							$sresult=$con->query($ssql);
							                    $srow=$sresult->fetch_assoc();
                                            
                                           $output.='
                                            
                                            <tr>
                                            <td>'.$row['staffid'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td> '.$row['topic'].'</td>
                                             <td> '.$row['subject'].'</td>
                                            <td>'. $row['starttime'].'</td>
                                            <td>'. $row['endtime'].'</td>
                                            <td>'. $row['duration'].'</td>
                                             <td>'. $row['class'].'</td>
                                            <td>'. $row['sessiondate'].'</td>
                                            <td>'. $row['sal'].'</td>
                                          
                                        </tr>
                                           
                                           ';
                                        }
                                        
                                          $output.='</table>';
                                       
                                       
                                       $output.='
                                       <br>
                                       <table border="1">
                                       <tr>
                                         <th>Staff ID</th>
                                          <th>Name</th>
                                          
                                          <th>Total Minutes</th>
                                           <th>Total Hours</th>
                                          <th>Total Salary</th>
                                         
                                       </tr>
                                     
                                       ';
                                            include 'Conn.php';
                                    $ssql="select staffid,name,SUM(duration) As Hours, SUM(sal) As Salary,name from salary where sessiondate BETWEEN '".$form."' AND '".$to."' and active=1 GROUP BY staffid";
                                    $sresult=$con->query($ssql);
                                    
                                      $tsql="select  SUM(duration) As Hours, SUM(sal) As Salary from salary where sessiondate BETWEEN '".$form."' AND '".$to."' and active=1";
                                    $tresult=$con->query($tsql);
                                    $trow=$tresult->fetch_assoc();
                                   
                                    if($sresult->num_rows>0)
                                    {
                                        while($srow=$sresult->fetch_assoc())
                                        {
                                             $hrs= $srow['Hours']/60;
                                            $output.='
                                            <tr>
                                              <td>'.$srow['staffid'].'</td>
                                            <td>'.$srow['name'].'</td>
                                              
                                             <td>'.$srow['Hours'].'</td>
                                              <td>'.round($hrs).'</td>
                                             <td>'. round($srow['Salary']).'</td>
                                          
                                            </tr>
                                            '; 
                                        }
                                    }
                                    $hrst=$trow['Hours']/60;
                                  $output.='
                                  <tr>
                                    <td>&nbsp;</td>
                                    <th>Total</th>
                                   <td><b>'. $trow['Hours'].'</b></td>
                                   <td><b>'.round($hrst).'</b></th>
                                    <td><b>'. $trow['Salary'].'</b></td>
                                    
                                  </tr>
                                  ';
                                       $output.='</table>';
                                      
                                        $output.='
                                         <br>
                                        <table border="1">
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>staff Name</th>
                                                <th>Total Minutes</th>
                                                <th>Total Hours</th>
                                                <th>Total Salary</th>
                                            </tr>
                                        
                                        ';
                                        include 'Conn.php';
                                    $ssql="select subject,name,SUM(duration) As Hours, SUM(sal) As Salary from salary where sessiondate BETWEEN '".$form."' AND '".$to."' and active=1 GROUP BY name,subjectId";
                                    $sresult=$con->query($ssql);
                                    
                                      $tsql="select  SUM(duration) As Hours, SUM(sal) As Salary from salary where sessiondate BETWEEN '".$form."' AND '".$to."' and active=1";
                                    $tresult=$con->query($tsql);
                                    $trow=$tresult->fetch_assoc();
                                     if($sresult->num_rows>0)
                                    {
                                        while($srow=$sresult->fetch_assoc())
                                        {
                                             $hrs=$srow['Hours']/60;
                                            $output.='
                                             <tr>
                                             <td>'.$srow['subject'].'</td>
                                            <td>'.$srow['name'].'</td>
                                            
                                             <td>'. $srow['Hours'].'</td>
                                              <td>'.round($hrs).'</td>
                                             <td>'. round($srow['Salary']).'</td>
                                          
                                            </tr>
                                            ';
                                        }
                                    }
                                    $output.='
                                  <tr>
                                    <td>&nbsp;</td>
                                    <th>Total</th>
                                   <td><b>'. $trow['Hours'].'</b></td>
                                   <td><b>'.round($hrst).'</b></th>
                                    <td><b>'. $trow['Salary'].'</b></td>
                                    
                                  </tr>
                                  ';
                                     $output.='</table>';        
                                    
                                    
                                    
                                        header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=Reportstaff.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        
                                    }
                                    ob_end_flush();
}
?>
<?php
if(isset($_POST['export']))
{
				 include 'Conn.php';
                  ob_start();
                  $output='';
                   $form=$_POST['formtxt'];
                                      //$form=strtotime($form);
                                       //$form=date('d/m/Y',$form);
                                        $to=$_POST['totxt'];
                                      //$to=strtotime($to);
                                       //$to=date('d/m/Y',$to);
                  $sql="select * from salary WHERE sessiondate BETWEEN '".$form."' AND '".$to."' ORDER BY name ASC";
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
                                        <th>Hours</th>
                                        <th>Time</th>
                                        <th>Session Date</th>
                                        <th>Salary</th>
                                   		<th>Total Hours</th>
                                        <th>Total Salary</th>
                                    </tr>
                                                          

                        ';
                       
                          
							                
                         while($row=$result->fetch_assoc())
                                        {
                                        	include 'Conn.php';
                                           		$ssql="select SUM(hrs) As Hours, SUM(sal) As Salary from salary where name='".$row['name']."' and sessiondate BETWEEN '".$form."' AND '".$to."' ORDER BY name ASC";
                    							$sresult=$con->query($ssql);
							                    $srow=$sresult->fetch_assoc();
                                            
                                           $output.='
                                            
                                            <tr>
                                            <td>'.$row['staffid'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td> '.$row['topic'].'</td>
                                             <td> '.$row['subject'].'</td>
                                            <td>'. $row['hrs'].'</td>
                                            <td>'. $row['tm'].'</td>
                                            <td>'. $row['sessiondate'].'</td>
                                            <td>'. $row['sal'].'</td>
                                           <td><font color="red">'.

                                        			
                                        		$srow['Hours']
                                        			
                                           .'</td>
                                           <td><font color="blue">'.

                                        			
                                        		$srow['Salary']
                                        			
                                           .'</td>
                                            </tr>
                                           
                                           ';
                                        }

                                       


                                       
                                        header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=Reportstaff.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                                    }
}
?>
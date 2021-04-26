<?php
if(isset($_POST['export']))
{
		include 'Conn.php';
		 $output='';
                                    $sql="select * from staff";
                                     $form=$_POST['txtsumform'];
                                      $form=strtotime($form);
                                       $form=date('d/m/Y',$form);
                                        $to=$_POST['txtsumto'];
                                      $to=strtotime($to);
                                       $to=date('d/m/Y',$to);
                                    $result=$con->query($sql);
                                     $tssql="select * from sal";
                                  $tsresult=$con->query($tssql);
                                  $tsrow=$tsresult->fetch_assoc();
                                  $s=$tsrow['sal'];
                                    if($result->num_rows>0)
                                    {
                                    	$output.='
                                    	<table border="1">
                                    	<tr>
                                    	  <th>Name</th>
							              <th>Hours</th>
							              <th>Remuneration</th>
							              <th>Total Remuneration</th>
							              </tr>

                                    	';

                                      while($row=$result->fetch_assoc())
                                        {
                                          include 'Conn.php';
                                        
                                  $ssql="select SUM(hrs) As Hours,SUM(sal) As Salary , name from salary where name='".$row['name']."'  and sessiondate BETWEEN '".$form."' AND '".$to."'";
                                  $sresult=$con->query($ssql);
                                  $srow=$sresult->fetch_assoc();
                                  
                                 
                                   $output .='
                                   	<tr>
                                   		<td>'.$srow['name'].'</td>
                                   		<td>'. $srow['Hours'].'</td>
                                   		<td>'.$s.'</td>
                                   		<td>'.$srow['Salary'].'</td>
                                   	</tr>

                                   ';
                                    $ttssql="select SUM(hrs) As Hours,SUM(sal) As Salary from salary where sessiondate BETWEEN '".$form."' AND '".$to."'";
                                  $ttsresult=$con->query($ttssql);
                                  $ttsrow=$ttsresult->fetch_assoc();
}
}
		$output.='
			<tr>
			<td>Total</td>
			<td>'.$ttsrow['Hours'].'</td>
			<td></td>
			<td>'.$ttsrow['Salary'].'</td>
			</tr>

		';
		$output.='</table>';
		header("Content-type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=ReportSummaryTotal.xls"); 
		header("Pragma: no-cache"); 
		header("Expires: 0"); 
		echo $output;
		ob_end_flush();                                    
}
?>
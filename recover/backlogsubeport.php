<?php
                  include 'Conn.php';
                  ob_start();
                  $std=$_POST['std'];
                  $endd=$_POST['endd'];
                  $output="";
                  $output .='
	<h2>Subject Wise Details</h2>
	<table border="1" cellspacing="0">
	<tr>
		<th>Subject Name</th>
		<th>&nbsp;</th>
		<th>Internal</th>
		<th>External</th>
		<th>Pratical</th>
	</tr>
	<tr>';
		
              include 'Conn.php';
              $sql="select * from subject where active='1'";
              $result=$con->query($sql);
              if($result->num_rows>0)
                {
                 while($row=$result->fetch_assoc())
                  {
                  	
                  
  $isql="select count(inter) As Internal from backlog where subname='".$row['name']."' and inter='Internal'and date between '".$std."' and '".$endd."'";
  $iresult=$con->query($isql);
  $irow=$iresult->fetch_assoc();

  $esql="select count(exter) As External from backlog where subname='".$row['name']."' and exter='External'and date between '".$std."' and '".$endd."'";
  $eresult=$con->query($esql);
  $erow=$eresult->fetch_assoc();


  $psql="select count(pract) As Pratical from backlog where subname='".$row['name']."' and pract='Pratical'and date between '".$std."' and '".$endd."'";
  $presult=$con->query($psql);
  $prow=$presult->fetch_assoc();         
            $output.='
            <tr>
            	<td colspan="5" align="center" style="color:red;"><b>'.$row['subject'].'</b></td>
            </tr>';
           
            $rsql="select *  from backlog where subname='".$row['name']."' and date between '".$std."' and '".$endd."' ORDER by prn ASC";
              		$rresult=$con->query($rsql);
              		 if($rresult->num_rows>0)
                {
              		while($rrow=$rresult->fetch_assoc())
              		{
              	   $brsql="select COUNT(*) as SubjectCT from backlog where subname='".$row['name']."' and date between '".$std."' and '".$endd."'";
              		$brresult=$con->query($brsql);
              		$brrow=$brresult->fetch_assoc();
              		 

            $output.='
            <tr>
            	<td>'.$rrow['prn'].'</td>
            	<td>'.$rrow['fullname'].'</td>
            	<td>'.$rrow['inter'].'</td>
            	<td>'.$rrow['exter'].'</td>
            	<td>'.$rrow['pract'].'</td>
            </tr>';
            
            
            	}
            }
           $total=$irow['Internal']+$erow['External']+$prow['Pratical'];
         $output.='
            <tr>
            	<td colspan="2" align="right"><b>Total</b></td>
            	 <td><b>'.$irow['Internal']."<br>".'</b></td>
                    <td><b>'.$erow['External']."<br>".'</b></td>
                     <td><b>'. $prow['Pratical']."<br>".'</b></td>
            </tr>
            <tr>
            	<td colspan="2" align="right"><b>Gr.Total</b></td>
            	<td colspan="3" align="center"><b>'.$total.'</b></td>
            </tr>';
           
			        }
			    }
		$output.='

        </tr>
	</table>';
 header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=BacklogSubjectDetails.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
?>
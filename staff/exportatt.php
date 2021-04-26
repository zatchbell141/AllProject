<?php
 include 'Conn.php';
 include 'session.php';
 ob_start();
 $output='';
 if(isset($_POST['export']))
{
  $datef=$_POST['txtdateform'];
 $datet=$_POST['txtdateto'];
 $datet=strtotime($datet);
 $datet=date('Y-m-d',$datet);
 $datef=strtotime($datef);
  $datef=date('Y-m-d',$datef);  
    
     $output.='
            <h3>Yash Typing Institute</h3>
            <h2>Students Attandence</h2>
            <table border=1>
            <tr>
                <th>Fullname</th>
                <th>Date</th>
                <th>Task</th>
            </tr>
     
     
     ';
                    include 'Conn.php';
                    $sql="select * from studentatt where date between '".$datef."' and '".$datet."'";
                    $result=$con->query($sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        
                        while($row=$result->fetch_assoc())
                        {
                            $tsql="select * from task where studentid='".$row['studentid']."'";
                            $tresult=$con->query($tsql);
                            $trow=$tresult->fetch_assoc();
                        $output.='
                         <tr>
                               <td>'.$row['fullname'].'</td>
                               <td>'.$row['date'].'</td>
                               <td>'.$trow['lession'].'</td>
                        </tr>';
                        }
                    }
                    $output.='</table>';
    
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=StudentAttendence.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
echo $output;
ob_end_flush();
}
?>
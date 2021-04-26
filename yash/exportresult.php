<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                   $num=0;
                   
                  if(isset($_POST['export']))
                {
                  $id=$_POST['txtdaterept'];
                  $id=strtotime($id);
                  $id=date('d/m/Y',$id);
                  $date=$id;
                  $sql="select * from blacklog where date like '%$date%' ORDER BY id DESC";
                    $result=$con->query($sql);

                     $ssql="select SUM(fees) AS Total from blacklog where date like '%$date%' ORDER BY id DESC";
                                        $sresult=$con->query($ssql);
                                        $srow=$sresult->fetch_assoc();
                    if(mysqli_num_rows($result)>0)
                    {
                        $output .='
                            <table border="1">
                               
                                    <tr>
                                        <th>SrNo</th>
                                         <th>PRN</th>
                                          <th>Seat No</th>
                                          <th>Name</th>
                                           <th>Contact No</th>
                                           <th>Subject</th>
                                          <th>Date</th>
                                        <th>Fees</th>
                                         <th>Late Fees</th>
                                        
                                    </tr>
                                                          

                        ';
                        while($row=$result->fetch_assoc())
                                        {
                                            $num++;
                                           $output.='
                                            
                                            <tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['prn'].'</td>
                                            <td>'.$row['seat'].'</td>
                                             <td>'.$row['name'].'</td>
                                             <td></td>
                                            <td>'.$row['subjects'].'</td>
                                              <td>'.$row['date'].'</td>  
                                            <td>'.$row['fees'].'</td>  
                                            <td>'.$row['late'].'</td> 
                                            <tr>
                                            
                                           
                                           ';
                                           
                                        }
                                       $output.='
                                       <table border="1">
                                       </tr>
                                             <td colspan="7" align="right">Gr Total:'.$srow['Total'].'</td>
                                            </tr>
                                            </table>
                                       ';
                                        header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=Result.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                    }

                }
?>
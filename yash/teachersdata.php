<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                   $num=0;
                   
                  if(isset($_POST['export']))
                {
                 // $id=$_POST['txtdaterept'];
                 // $id=strtotime($id);
                 // $id=date('d/m/Y',$id);
                  //$date=$id;
                  $sql="select * from salm ORDER BY id DESC";
                    $result=$con->query($sql);

                    // $ssql="select SUM(fees) AS Total from blacklog where date like '%$date%' ORDER BY id DESC";
                      //                  $sresult=$con->query($ssql);
                        //                $srow=$sresult->fetch_assoc();
                    if(mysqli_num_rows($result)>0)
                    {
                        $output .='
                            <table border="1">
                               
                                    <tr>
                                        
                                          <th>Name</th>
                                          
                                           <th>Subject</th>
                                          <th>Hours</th>
                                        <th>Monthly</th>
                                      
                                        
                                    </tr>
                                                          

                        ';
                        while($row=$result->fetch_assoc())
                                        {
                                            $num++;
                                           $output.='
                                            
                                            <tr>
                                          
                                             <td>'.$row['name'].'</td>
                                           
                                            <td>'.$row['subject'].'</td>
                                              <td>'.$row['hrs'].'</td>  
                                            <td>'.$row['monthly'].'</td>  
                                            
                                            <tr>
                                            
                                           
                                           ';
                                           
                                        }
                                     
                                        header("Content-type: application/octet-stream"); 
										header("Content-Disposition: attachment; filename=teachersdata.xls"); 
										header("Pragma: no-cache"); 
										header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                    }

                }
?>
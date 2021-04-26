<?php
                  include 'Conn.php';
                  ob_start();
                  $output='';
                  
                  if(isset($_POST['export']))
                {
                   $num=0;

                  //$id=$_POST['txtdaterept'];
                  //$id=strtotime($id);
                  //$id=date('d/m/Y',$id);
                 // $date=$id;
                  $sql="select * from studreg ORDER BY id DESC";
                    $result=$con->query($sql);

                    

                    

                    if(mysqli_num_rows($result)>0)
                    {
                        $output .='
                            <table border="1">
                               
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                      
                                        <th>PRN</th>
                                        <th>Contact</th>
                                        <th>Sem</th>
                                        <th>Year</th>
                                        <th>Password</th>
                                        
                                    </tr>
                                                          

                        ';
                        while($row=$result->fetch_assoc())
                                        {
                                                                                          
                                           $num++;

                                            // $countarry= array("External");
                                     //$countarryi= array("Internal");
                                      //$countarrysub= array($subrow['name']);
                                     //$subject= array();
                                    //$inter="";
                                    //$exter="";
                                     //$sub="";
                                    //foreach ($countarrysub as $word) 
                                    //{  
                                     // $sub=substr_count($str, $word); 
                                    //}
                                     //foreach ($countarry as $word) 
                                    //{  
                                     // $exter=substr_count($str, $word); 
                                    //}
                                    //foreach ($countarryi as $wordi) 
                                    //{
                                      //$inter=substr_count($str, $wordi);  
                                      
                                    //}
                                    //if($inter>0)
                                    //{
                                      // $new=str_replace("Internal"," ", $str);
                                       //$news=str_replace("External"," ", $new);
                                      //$inter="Internal";
                                    ///}
                                    //else
                                    //{
                                      //$inter="---";
                                    //}
                                    //if($exter>0)
                                    //{
                                      //$exter="External";
                                    //}
                                    //else
                                    ///{
                                      ///$exter="---";
                                    //}

                                           $output.='
                                            
                                            <tr>
                                           
                                           <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                           
                                            <td><?php echo $row['PRN'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                            <td><?php echo $row['year']?></td>
                                            <td><?php echo decrypt($row['passwd'],$key);?></td>
                                            <tr>
                                            
                                           
                                           ';
                                           
                                        }
                                       
                                        header("Content-type: application/octet-stream"); 
                                        header("Content-Disposition: attachment; filename=Studentdetails.xls"); 
                                        header("Pragma: no-cache"); 
                                        header("Expires: 0"); 
                                        echo $output;
                                        ob_end_flush();
                    }

                }
?>
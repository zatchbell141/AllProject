<?php
                                if(isset($_POST['sdsubmit']))
                            {
                                    include 'Conn.php';
                                    $id=$_GET['varname'];
                                    $query="Delete from admin where id='".$id."'";
                                    mysqli_query($con,$query); 
                                    $msg=1;
                                }
                                else{
                                    $msg=0;   
                                }
                                //mysqli_close($con); 
                                ?>
          <?php
                include 'Conn.php';
            
                   
                    $name=$_POST['txtename'];
                    $Address=$_POST['txtehrs'];
                    $per=$_POST['txtesubject'];
                    $Stream=$_POST['txtstream'];
                    $college=$_POST['txtcolg'];
                    $phno=$_POST['txtphone'];
                    $reference=$_POST['txtref'];
                   
                    $query="insert into enquiry(name, Address, per, Stream, college, phno, reference) values('$name','$Address','$per','$Stream','$college','$phno','$reference')";
                  
                   if($con->query($query)==true)
                    {
                    echo "Insert sucessfull..!!";
                    }
                    else
                    {
                    echo "Failed";

                    }
                
               
?>
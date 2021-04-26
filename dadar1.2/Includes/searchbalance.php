<?php
          
          if(isset($_POST['txtsrchuser']))
          {
             include 'Conn.php';
            $name=$_POST['txtaddname'];
            $sql="select * from receipt where FullName='$name' and active=1 and Receipttype='BCAFEES' ORDER BY id DESC";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();
            $chckbal=$row['Balance'];
            if($chckbal==0)
            {
                 echo '<script type="text/javascript">alert("Full Paid Student...!!");</script>';
            }
          

             
            $rsql="SELECT ReceiptNewNo FROM `receipt` ORDER BY id DESC";
           $rresult=$con->query($rsql);
           $rrow=$rresult->fetch_assoc();
           $recptno=explode('-', $rrow['ReceiptNewNo']);
           $rn=$recptno[1]+1;
           //echo $rrow['ReceiptNewNo'];
          }

         ?>
 <?php
          
          if(isset($_POST['txtsrchuser']))
          {
             include 'Conn.php';
            $name=$_POST['txtaddname'];
            $mode=$_POST['txtinstm'];
            $sql="select * from studentdt where fullname='".$name."' ORDER BY studentid DESC";
            $result=$con->query($sql);
            $row=$result->fetch_assoc();
            
              $chcksql="select * from receipt where FullName='$name' and ReceiptMode='$mode' and active=1 and Receipttype='BCAFEES' ORDER BY id DESC";
              $chckresult=mysqli_query($con,$chcksql);
              $chckrow=mysqli_fetch_array($chckresult);
              $count=mysqli_num_rows($chckresult);
              if($count==1)
              {
                             echo '<script type="text/javascript">alert("Already Paid First Installment...!!");</script>';
              }
          
            
            
            $fname=$row['coursename'];
            $feesmode=$_POST['txtinstm'];
            $fsql="select * from fees where name='".$fname."' and mode='".$feesmode."' and active=1";
            $fresult=$con->query($fsql);
            $frow=$fresult->fetch_assoc();

             
           $rsql="SELECT ReceiptNewNo FROM `receipt` ORDER BY id DESC";
           $rresult=$con->query($rsql);
           $rrow=$rresult->fetch_assoc();
           $recptno=explode('-', $rrow['ReceiptNewNo']);
           $rn=$recptno[1]+1;
           //echo $rrow['ReceiptNewNo'];
          }

         ?>
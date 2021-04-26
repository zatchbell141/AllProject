<?php
 $receiptno=$_POST['receipo'];
 $fullname=$_POST['txtfullname'];
 $seat=$_POST['txtseat'];
 $totalf=$_POST['txtfees'];
 $paid=$_POST['txtpaid'];
 $payment=$_POST['payment'];
 $chqno=$_POST['txtcheqno'];
 $chqdate=$_POST['txtchequd'];
 $chqdate=strtotime($chqdate);
 $chqdate=date('Y-m-d',$chqdate);
 $chqrbank=$_POST['txtbank'];
 $chqbbank=$_POST['txtbenbank'];
 $recpty=$_POST['txtrecty'];
$lmode=$_POST['pmode'];
$lfees=$_POST['txtlatefees'];
$cocenter=$_POST['ccenter'];
$cfees=$_POST['txtcenter'];
$date=$_POST['lbdate'];
$date=strtotime($date);
$date=date('Y-m-d',$date);
$total=$paid+$lfees+$cfees;
$fees=$paid+$lfees+$cfees;
$Balance=$total-$fees;
$prn=$_POST['prn'];
$studentid=$_POST['txtstudentid'];
$examyrs=$_POST['txtexamyrs'];
include 'Conn.php';
if($Balance>=0)
    {
$sql="INSERT INTO `receipt`(`id`, `Receipttype`, `ReceiptNewNo`, `ReceiptOld`, `FullName`, `Lastame`, `Name`, `Fathername`, `PRN`, `TRN`, `SeatNO`, `Date`, `Subject`, `Total`, `Balance`, `Paid`, `Late`, `PaymentType`, `ChequeNo`, `ChequeDate`, `Bank`, `Year`, `Sem`, `StdStatus`,`code`,`decp`,`ReceiptMode`,`ben`,`yash`,`active`)
 values('','$recpty','$receiptno','0','$fullname','0','0','0','$prn','0','0','$date','0','$fees','$Balance','$fees','$lfees','$payment','$chqno','$chqdate','$chqrbank','0','0','$lmode','0','0','$cocenter','$chqbbank','1','1')";
        if($con->query($sql)==true)
        {
        $sql="INSERT INTO `backfees`(`id`, `studentid`, `fullname`, `paymenttype`, `cnmode`,`examyrs`,`fees`, `lfees`, `cfees`, `paid`, `balane`, `date`, `chdate`, `chqno`, `bank`, `rbank`,`ReceiptNewNo`) VALUES ('','$studentid','$fullname','$payment','$cocenter','$examyrs','$total','$lfees','$cfees','$paid','$Balance','$date','$chqdate','$chqno','$chqbbank','$chqrbank','$receiptno')";
        if($con->query($sql)==true)
        {
        /*echo "Insert sucessfull..!!";*/
        header("location:backlog.php");

        }
        else
        {
        echo "Failed";
        }
        }
        else
        {
        echo "Failed";
        }
   
        //echo '<script type="text/javascript">alert("Please check Fees Amount...!!");</script>';
    }
    else
    {
       echo '<script type="text/javascript">alert("Please check Fees Amount...!!");</script>'; 
    }

?>
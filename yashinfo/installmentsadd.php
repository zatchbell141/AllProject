<?php
include_once 'Conn.php';
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php

include 'Conn.php';
date_default_timezone_set("Asia/Kolkata");
  $receipt=date("Ydmhis");
    $prn=protect($_POST['txtprn']);
    $name=protect($_POST['txtname']);
    $lastname=protect($_POST['txtlastname']);
    $year=protect($_POST['year']);
    $tfees=protect($_POST['txtfees']);
    $sem=protect($_POST['txtsem']);
    $mode=protect($_POST['txtmode']);
    $paid=protect($_POST['txtpaidfees']);
    $payment=protect($_POST['payment']);
    $chequeno=protect($_POST['txtcheqno']);
    $chequedate=protect($_POST['txtchequd']);
    $bank=protect($_POST['txtbank']);
    $late=protect($_POST['pmode']);
    $date=protect($_POST['lbdate']);
    $bal=protect($_POST['txtibal']);
    $total=$bal-$paid;
    if($total>=0)
    {
     
        //$sql="insert into others(receiptNo,prn,name,lastname,year,sem,mode,payment,chequeno,chequedate,bank,fees,paid,balance,paymentmd,date) values('$receipt',$prn','$name','$lastname', '$year','$sem','$mode','$payment','$chequeno','$chequedate','$bank','$tfees','$paid','$bal','$late','$date')";
        $sql="insert into others values('', '$receipt', '$prn', '$name', '$lastname', '$year', '$sem', '$mode', '$payment', '$chequeno', '$chequedate', '$bank', '$tfees', '$paid', '$total','$late','$date')";
        if($con->query($sql)==true)
        {
        echo "Insert sucessfull..!!";
        }
        else
        {
        echo "Failed";
        }
    }
    else
    {
        $total="0";
        echo '<script type="text/javascript">alert("Please check Fees Amount...!!");</script>';
    }

?>
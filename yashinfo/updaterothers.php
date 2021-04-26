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
$receipt=protect($_POST['receipo']);
    $id=protect($_POST['txtidothers']);
 	$prn=protect($_POST['txtprn']);
    $name=protect($_POST['txtname']);
    $lastname=protect($_POST['txtlastname']);
    $year=protect($_POST['year']);
    $tfees=protect($_POST['txtfees']);
    $sem=protect($_POST['txtsem']);
    $mode=protect($_POST['txtmode']);
    $paid=protect($_POST['txtpaidfees']);
    $chequeno=protect($_POST['txtcheqno']);
    $chequedate=protect($_POST['txtchequd']);
    $bank=protect($_POST['txtbank']);
    $late=protect($_POST['pmode']);
    $date=protect($_POST['lbdate']);
    $payment=protect($_POST['payment']);
    $bal=$tfees-$paid;
$sql="update others set prn='$prn',name='$name',lastname='$lastname',year='$year',sem='$sem',mode='$mode',payment='$payment',chequeno='$chequeno',chequedate='$chequedate',bank='$bank',fees='$tfees',paid='$paid',balance='$bal',paymentmd='$late',date='$date' where receiptNo='$receipt'";
if($con->query($sql)==true)
{
echo "Record Updated..!!!!";
}
else
{
echo "Failed";
}

?>
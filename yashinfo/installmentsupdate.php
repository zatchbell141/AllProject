<?php
include_once 'Conn.php';
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
    $id=protect($_POST['txtidothers']);
    $receipt=protect($_POST['receipo']);
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
    $sql="update others set prn='$prn',name='$name',lastname='$lastname',year='$year',sem='$sem',mode='$mode',payment='$payment',chequeno='$chequeno',chequedate='$chequedate',bank='$bank',fees='$tfees',paid='$paid',balance='$total',paymentmd='$late',date='$date' where id='$id'";
    if($con->query($sql)==true)
    {
    echo "Record Updated..!!!!";
    }
    else
    {
    echo "Failed";
    }
    }
?>
<?php
//installmentsadd.php
include 'Conn.php';
include 'protect.php';
$date=protect($_POST['lbdate']);

    $date=strtotime($date);
    $date=date('Y-m-d',$date);

$receiptno=protect($_POST['receipo']);
$prn=protect($_POST['txtprn']);
$trn=protect($_POST['txttrn']);
$studentid=protect($_POST['txtidothers']);
$fullname=protect($_POST['txtfullname']);
$name=protect($_POST['txtname']);
$lastname=protect($_POST['txtlastname']);
$cnfno=protect($_POST['txtcentreno']);
$recpty=protect($_POST['txtrecty']);
$year=protect($_POST['year']);
$fees=protect($_POST['txtfees']);
$paid=protect($_POST['txtpaidfees']);
$payment=protect($_POST['payment']);
$chqno=protect($_POST['txtcheqno']);
$chqd=protect($_POST['txtchequd']);
$sem=protect($_POST['txtsem']);
    $chqd=strtotime($chqd);
    $chqd=date('Y-m-d',$chqd);
$recem=protect($_POST['txtfeesmode']);
$bank=protect($_POST['txtbank']);
$stdstatus=protect($_POST['pmode']);
$Fathername=protect($_POST['txtfathername']);
$Balance=protect($_POST['btxtfees']);
$bal=$Balance-$paid;
$ban=protect($_POST['txtbenbank']);
$admyrs=protect($_POST['txtadmyrs']);
$Late=protect($_POST['txtlatefees']);
    if($bal>=0)
    {
     
        //$sql="insert into others(receiptNo,prn,name,lastname,year,sem,mode,payment,chequeno,chequedate,bank,fees,paid,balance,paymentmd,date) values('$receipt',$prn','$name','$lastname', '$year','$sem','$mode','$payment','$chequeno','$chequedate','$bank','$tfees','$paid','$bal','$late','$date')";
       $sql="INSERT INTO `receipt`(`id`, `Receipttype`, `ReceiptNewNo`, `ReceiptOld`, `FullName`, `Lastame`, `Name`, `Fathername`, `PRN`, `TRN`, `SeatNO`, `Date`, `Subject`, `Total`, `Balance`, `Paid`, `Late`, `PaymentType`, `ChequeNo`, `ChequeDate`, `Bank`, `Year`, `Sem`, `StdStatus`,`code`,`decp`,`ReceiptMode`, `admissionyrs`,`examyrs`,`ben`,`yash`,`active`)
 values('','$recpty','$receiptno','0','$fullname','$lastname','$name','$Fathername','$prn','$trn','0','$date','0','$Balance','$bal','$paid','$Late','$payment','$chqno','$chqd','$bank','$year','$sem','$stdstatus','$cnfno','0','$recem','$admyrs','0','0','1','1')";
        if($con->query($sql)==true)
        {
       echo '
                         <div class="alert-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert-inner">
                                            <div class="alert-hd">
                                                 <div class="alert-list">
                                                    <div class="alert alert-success" role="alert">Your data successfully added..!!
                                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
                        ';
        }
        else
        {
         echo '
                        <div class="alert-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert-inner">
                                            <div class="alert-hd">
                                                 <div class="alert-list">
                             <div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! failed to add.!
                                </div>
                                 </div>
                        </div>
                    </div>
                </div>
                        ';

        }
    }
    else
    {
        $bal="0";
        echo '<script type="text/javascript">alert("Please check Fees Amount...!!");</script>';
    }

?>
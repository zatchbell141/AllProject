<?php
if(isset($_POST['btnsubmit']))
{
include 'Conn.php';

include 'protect.php';
    $date1=date('Y-m-d');
   /* $date=strtotime($date);
    $date=date('Y-m-d',$date);*/

$receiptno=protect($_POST['receipo']);
$prn=protect($_POST['txtprn']);
$trn=protect($_POST['txttrn']);
$studentid=protect($_POST['txtidothers']);

$name=protect($_POST['txtname']);
$lastname=protect($_POST['txtlastname']);
$recpty=protect($_POST['txtrecpty']);
$year="0";
$fees=protect($_POST['txtfees']);
$paid=protect($_POST['txtpaidfees']);
$payment=protect($_POST['payment']);
$chqno=protect($_POST['txtcheqno']);
$chqd=protect($_POST['txtchequd']);
$sem="0";
    $chqd=strtotime($chqd);
    $chqd=date('Y-m-d',$chqd);

$bank=protect($_POST['txtbank']);
$stdstatus=protect($_POST['pmode']);
$Fathername=protect($_POST['txtfname']);
$Balance=$fees-$paid;
$fullname=$name." ".$Fathername." ".$lastname;
$Late=protect($_POST['txtlatefees']);
    $decp=protect($_POST['txtdecp']);
    if($Balance>=0)
    {
     
      $sql="INSERT INTO `receipt`(`id`, `Receipttype`, `ReceiptNewNo`, `ReceiptOld`, `FullName`, `Lastame`, `Name`, `Fathername`, `PRN`, `TRN`, `SeatNO`, `Date`, `Subject`, `Total`, `Balance`, `Paid`, `Late`, `PaymentType`, `ChequeNo`, `ChequeDate`, `Bank`, `Year`, `Sem`, `StdStatus`,`decp`, `active`,`yash`)
 values('','$recpty','$receiptno','0','$fullname','$lastname','$name','$Fathername','$prn','$trn','0','$date1','0','$fees','$Balance','$paid','$Late','$payment','$chqno','$chqd','$bank','0','0','In Process','$decp','1','1')";
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
        $Balance="0";
        echo '<script type="text/javascript">alert("Please check Fees Amount...!!");</script>';
    }

}
?>
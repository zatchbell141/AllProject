<?php

include 'Conn.php';
//include 'protect.php';
if(isset($_POST['btnsubmit']))
{
$date=protect($_POST['lbdate']);

    $date=strtotime($date);
    $date=date('Y-m-d',$date);
    echo $date;
$receiptno=protect($_POST['receipo']);
$prn="0";
$trn="0";
$studentid=protect($_POST['txtidothers']);
$fullname=protect($_POST['txtfullname']);
$name=protect($_POST['txtname']);
$lastname=protect($_POST['txtlastname']);
$cnfno="0";
$recpty=protect($_POST['txtrecty']);
$year=protect($_POST['txtcoursenm']);
$fees=protect($_POST['txtfees']);
$paid=protect($_POST['txtpaidfees']);
$payment=protect($_POST['payment']);

$sem=protect($_POST['txtsem']);

$recem="Regular";

$stdstatus="Completed";
$Fathername=protect($_POST['txtfathername']);

$Late=protect($_POST['txtlatefees']);
$Balance=$fees-$paid+$Late;
$ben=protect($_POST['txtbenbank']);

$hsc = pathinfo($_FILES['txtbankreceipt']['name']);
$ext4 = $hsc['extension']; // get the extension of the file
$newname4 = $fullname."bank.".$ext4; 
$target4 = 'students/'.$newname4;
move_uploaded_file( $_FILES['txtbankreceipt']['tmp_name'], $target4);


    if($payment=='Cash')
    {
        $chqno="0000";
        $chqd="0000-00-00";
        $ban=" ";  
       
        $bank="000";
    }
    else
    {
        $chqno=protect($_POST['txtcheqno']);
        $chqd=protect($_POST['txtchequd']);
        $ban=protect($_POST['txtbenbank']);  
        $chqd=strtotime($chqd);
        $chqd=date('Y-m-d',$chqd);
        $bank=protect($_POST['txtbank']);
    }
if($Balance>=0)
    {

$sql="INSERT INTO `receipt`(`id`, `Receipttype`, `ReceiptNewNo`, `ReceiptOld`, `FullName`, `Lastame`, `Name`, `Fathername`, `PRN`, `TRN`, `SeatNO`, `Date`, `Subject`, `Total`, `Balance`, `Paid`, `Late`, `PaymentType`, `ChequeNo`, `ChequeDate`, `Bank`, `Year`, `Sem`, `StdStatus`,`code`,`decp`,`ReceiptMode`,`ben`,`yash`,`active`)
 values('','$recpty','$receiptno','0','$fullname','$lastname','$name','$Fathername','$prn','$trn','0','$date','0','$fees','$Balance','$paid','$Late','$payment','$chqno','$chqd','$bank','$year','$sem','$stdstatus','$cnfno','0','$recem','$ben','0','1')";
        if($con->query($sql)==true)
                    {
                       $sql="insert into `receiptupload`(`id`, `receiptid`, `file`, `receipttype`, `active`) values(' ','$receiptno','$target4','$recpty',1)";
                        if($con->query($sql)==true)
                        {
                                            echo '<script>
                                    window.location = "http://tech.bcaedu.in/printform.php?varname='.$fullname.'";
                                </script>';
                                   
                                }
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
       echo '<script type="text/javascript">alert("Please check Fees Amount...!!");</script>'; 
    }
    
}

?>
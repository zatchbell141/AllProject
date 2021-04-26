<?php
include 'Conn.php';
if(isset($_POST['btnsubmit']))
{
$date=protect($_POST['lbdate']);

    $date=strtotime($date);
    $date=date('Y-m-d',$date);
    echo $date;
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
$sem=protect($_POST['txtsem']);
$recem=protect($_POST['txtfeesmode']);
$stdstatus=protect($_POST['pmode']);
$Fathername=protect($_POST['txtfathername']);
$Late=protect($_POST['txtlatefees']);
$Balance=$fees-$paid+$Late;
$ben=protect($_POST['txtbenbank']);
$id=protect($_POST['txtid']);
$receiptnoold=protect($_POST['txtreceiptnold']);
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
		$sql="update receipt set `Receipttype`='$recpty', `ReceiptNewNo`='$receiptno', `ReceiptOld`='$receiptnoold', `FullName`='$fullname', `Lastame`='$lastname', `Name`='$name', `Fathername`='$Fathername', `PRN`='$prn', `TRN`='$trn', `SeatNO`='0', `Date`='$date', `Subject`='0', `Total`='$fees', `Balance`='$Balance', `Paid`='$paid', `Late`='$Late', `PaymentType`='$payment', `ChequeNo`='$chqno', `ChequeDate`='$chqd', `Bank`='$bank', `Year`='$year', `Sem`='$sem', `StdStatus`='$stdstatus',`code`='0',`decp`='0',`ReceiptMode`='$recem',`ben`='$ban',`active`='1' where `id`='$id'";
		if($con->query($sql)==true)
                    {
                       /* echo '
                         <div class="alert-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert-inner">
                                            <div class="alert-hd">
                                                 <div class="alert-list">
                                                    <div class="alert alert-success" role="alert">Your data Updated...!!
                                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
                        ';*/
					                         echo '<script>
					    window.location = "http://tech.bcaedu.in/receipt.php";
					</script>';
                    
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
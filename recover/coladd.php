
<?php

include 'Conn.php';
include 'protect.php';
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
$examyrs=strtoupper(protect($_POST['txtexam']));
$ban=protect($_POST['txtbenbank']);
$admyrs=protect($_POST['txtadmyrs']);
$modeconvo=protect($_POST['txtpost']);
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
    
    
    $sql="select * from receipt where fullname='$fullname'  and Year='$year'and Receipttype='$recpty'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
  
    /*$_SESSION['login_user']=$usernme;
   echo("<script>location.href = 'index2.php';</script>");*/
   echo "Already Done..!!";
  }
  else
  {
    //echo "Invaild username and password";
  
    
    
$sql="INSERT INTO `receipt`(`id`, `Receipttype`, `ReceiptNewNo`, `ReceiptOld`, `FullName`, `Lastame`, `Name`, `Fathername`, `PRN`, `TRN`, `SeatNO`, `Date`, `Subject`, `Total`, `Balance`, `Paid`, `Late`, `PaymentType`, `ChequeNo`, `ChequeDate`, `Bank`, `Year`, `Sem`, `StdStatus`,`code`,`decp`,`ReceiptMode`,`admissionyrs`,`examyrs`,`ben`,`yash`,`active`)
 values('','$recpty','$receiptno','0','$fullname','$lastname','$name','$Fathername','$prn','$trn','0','$date','0','$fees','$Balance','$paid','$Late','$payment','$chqno','$chqd','$bank','$year','$sem','$stdstatus','$cnfno','$modeconvo','$recem','$admyrs','$examyrs','$ben','1','1')";
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
    }
    else
    {
       echo '<script type="text/javascript">alert("Please check Fees Amount...!!");</script>'; 
    }
    


?>
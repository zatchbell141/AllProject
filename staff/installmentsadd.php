<?php
include 'session.php';
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>
<?php
include 'Conn.php';
include 'session.php';
    $studid=protect($_POST['txtstudid']);
    $Name=protect($_POST['txtstudname']);
    $coursename=protect($_POST['txtcourse']);
    $totalfees=protect($_POST['txtfees']);
    $paidfees=protect($_POST['txtpaid']);
    $payment=protect($_POST['payment']);
    $chqno=protect($_POST['txtcheqno']);
    $chqdate=protect($_POST['txtchequd']);
     $admittedby=protect($_POST['txtadmit']);
    $chqdate=strtotime($chqdate);
    $chqdate=strtotime($chqdate);
    $chqdate=date('Y-m-d',$chqdate);
    $batch=protect($_POST['batch']);
    echo $chqdate;
    $coursem=protect($_POST['txtcoursem']);
    $bank=protect($_POST['txtbank']);
    $date=protect($_POST['txtdate']); 
    $date=strtotime($date);
    $date=date('Y-m-d',$date);
    echo $date;
    $receiptno=protect($_POST['txtreceno']);
    $dis=protect($_POST['txtdisc']);
    $userfees=$paidfees+$dis;
    $bal=$totalfees-$userfees;
    $from=protect($_POST['txtformno']);
    $f=explode("-",$from);
    $num=$f[1];
                $duedate=date('Y-m-d');
                $time = strtotime($duedate);
                $final = date("Y-m-d", strtotime("+1 month", $time));
    $indate=protect($final);
    //  $indate=strtotime($indate);
    // $indate=indate('Y-m-d',$indate);
    echo $indate;
    $year=date('My');
    $year=date('My');
    if($coursem=='3' or $coursem=='4')
    {
        $yash='1';
    }
    
        $sql="INSERT INTO `balance`(`receiptNo`,`admittedby`, `fromno`,`studentid`, `fullname`,`batch`,`coursemode`, `coursename`, `payment`, `date`,`dis`,`fees`, `paid`, `balance`, `chequedate`, `chequeno`, `bank`, `active`,`instaldate`,`year`,`num`,`yash`)  
        VALUES('$receiptno','$admittedby','$from','$studid','$Name','$batch','$coursem','$coursename','$payment','$date','$dis','$totalfees','$paidfees','$bal','$chqdate','$chqno','$bank','1','$indate','$year','$num','$yash')";
        if($con->query($sql)==true)
        {
            $sql="INSERT INTO `receipt`(`receiptNo`,`admittedby`, `fromno`,`studentid`, `fullname`,`batch`,`coursemode`, `coursename`, `payment`, `date`,`dis`,`fees`, `paid`, `balance`, `chequedate`, `chequeno`, `bank`, `active`,`instaldate`,`year`,`num`,`yash`)  
                VALUES('$receiptno','$admittedby','$from','$studid','$Name','$batch','$coursem','$coursename','$payment','$date','$dis','$totalfees','$paidfees','$bal','$chqdate','$chqno','$bank','0','$indate','$year','$num','$yash')";
            $sql="update receipt set instlbal='".$bal."' where studentid='".$studid."' and coursename='".$coursename."'";
        if($con->query($sql)==true)
        {
             $sql="INSERT INTO `receipt`(`receiptNo`,`admittedby`, `fromno`,`studentid`, `fullname`,`batch`,`coursemode`, `coursename`, `payment`, `date`,`dis`,`fees`, `paid`, `balance`, `chequedate`, `chequeno`, `bank`, `active`,`instaldate`,`year`,`num`,`yash`)  
                VALUES('$receiptno','$admittedby','$from','$studid','$Name','$batch','$coursem','$coursename','$payment','$date','$dis','$totalfees','$paidfees','$bal','$chqdate','$chqno','$bank','0','$indate','$year','$num','$yash')";
                $con->query($sql);
                
        echo "Insert sucessfull..!!";
        }
        }
        else
        {
        echo "Failed";
        }
?>
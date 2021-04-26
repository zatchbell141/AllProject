<?php

    $seat=$_GET['varname'];
    $id=$_GET['seat'];
    include 'Includes/Conn.php';


$sql="SELECT b1.seat,b1.fullname,b1.subcode,b1.subname,b1.prn,b1.inter,b1.exter,b2.paid,b2.fees,b2.cfees,b2.lfees,b2.paymenttype,b2.bank,b2.cnmode,b2.chdate,b2.ReceiptNewNo,b2.chqno,b2.rbank , b2.date from backlog b1,backfees b2 where b2.studentid=b1.studentid and b2.date=b1.date and b2.studentid='$seat' and b1.seat='$id' ORDER BY `b1`.`seat` DESC";
$result=$con->query($sql);
$row=$result->fetch_assoc();
$date=$row['date'];
  $isql="select count(inter) As Internal from backlog where seat='".$row['seat']."' and inter='Internal' and date='$date'";
  $iresult=$con->query($isql);
  $irow=$iresult->fetch_assoc();

  $esql="select count(exter) As External from backlog where seat='".$row['seat']."' and exter='External' and date='$date'";
  $eresult=$con->query($esql);
  $erow=$eresult->fetch_assoc();

    $psql="select count(pract) As Pratical from backlog where seat='".$row['seat']."' and pract='Pratical' and date='$date'";
  $presult=$con->query($psql);
  $prow=$presult->fetch_assoc();

$ifsql="select fees from fees where name='Internal'";
  $ifresult=$con->query($ifsql);
  $ifrow=$ifresult->fetch_assoc();


  $efsql="select fees from fees where name='External'";
  $efresult=$con->query($efsql);
  $efrow=$efresult->fetch_assoc();

  $pfsql="select fees from fees where name='Pratical'";
  $pfresult=$con->query($pfsql);
  $pfrow=$pfresult->fetch_assoc();

 $totalinter=$irow['Internal']*$ifrow['fees'];
 $totalexter=$erow['External']*$efrow['fees'];
 $totalpract=$prow['Pratical']*$pfrow['fees'];
 $totalfees=$totalinter+$totalexter+$totalpract;

$amu=$totalfees+$row['lfees']+$row['cfees'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    
    <title>Receipt</title>
    
<link rel='stylesheet' type='text/css' href='receipt/css/Invloce.css' madia="screen"/>
        <!--<link rel='stylesheet' type='text/css' href='css/Invloce1.css' madia="print"/>-->
  <link rel='stylesheet' type='text/css' href='receipt/css/print.css' media="print" />
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>

</head>

<body>
     <div align="center" id="hiderow" ><h1><input type ="submit"  value ="Print" onclick="window.print()" name="tsubmit"></h1></div>
        <div align="center" id="hiderow" ><a  href="backlogreceipt.php" >back to Backlog Fees</a><br/>
           
        </div>
    <div id="page-wrap">

            <h1 id="header">Receipt</h1>
        
        <div align="left">
        
            <br/>
              <img id="image" src="img/TMV81.jpg"  width="300" />
          
         
    
        </div>
        
        <div style="clear:both"></div>
        
        <div id="customer">
        <p style="font-size:120%;">
                <br/>
                <?php
                $prn=$row['prn'];
               
                if($prn=="")
                {
                   echo "PRN:&nbsp;".'0'."<br>"; 
                }
                else
                {
                     echo "PRN:&nbsp".$prn."<br>"; 
                }
               
                ?>
                Name:&nbsp;<?php echo $row['fullname'];?><br>
        
               Seat No:&nbsp;<?php echo $row['seat'];?><br>
          
               Payment type:&nbsp;<?php echo $row['paymenttype'];?><br>

               <?php

            $cn=$row['chqno'];
            $cd=$row['chdate'];
            $cd=strtotime($cd);
            $cd=date('d-m-Y',$cd);
            
            $cb=$row['rbank'];
            
            $benb=$row['bank'];
            $pt=$row['paymenttype'];
                if($pt=="Cash")
                {
                    echo "";
                }
                if($pt=="Cheque")
                {
                    echo "<p  style='font-size:120%;'>Cheque Number:$cn<br>";
                    echo "<p  style='font-size:120%;'>Cheque Date:$cd<br>";
                    echo "<p  style='font-size:120%;'>Bank Name:$cb</p><br> ";
                }
                if($pt=="NEFT" or $pt=="MT")
                {
                    //echo "<p  style='font-size:120%;'>NEFT Number:$cn<br>";
                    echo "<p  style='font-size:120%;'>Date:$cd<br>";
                    echo "<p  style='font-size:120%;'>Remitter Bank:$benb</p>"; 
                    echo "<p  style='font-size:120%;'>Beneficiary Bank:$cb</p> "; 
                
                }
                 if($pt=="TMV Fees")
                {
                    //echo "<p  style='font-size:120%;'>NEFT Number:$cn<br>";
                    echo "<p  style='font-size:120%;'>Date:$cd<br>";
                    echo "<p  style='font-size:120%;'>Remitter Bank:$benb</p>"; 
                    echo "<p  style='font-size:120%;'>Beneficiary Bank:$cb</p> "; 
                
                }
          ?>
           <table id="meta">
                <tr>
                    <td class="meta-head">Receipt:</td>
                    <td><div align="center"><b><?php echo $row['ReceiptNewNo'];?></b></div></td>
                </tr>
                <tr>

                    <td class="meta-head">Date:</td>
                    <td align="center"><div align="center"><b><?php 
                        $start=$row['date'];
                         $start=strtotime($start);
                        $start=date('d-m-Y',$start);
                    echo $start; ?></b></div></td>
                </tr>
                <tr>
                    <td class="meta-head">Fees Amount:</td>
                    <td align="center"><div align="center"><b><?php echo $amu;?></b></div></td>
                </tr>

            </table>
        
        </div>
        <table id="items">
        
         <tr>
            <tr>
              <th>Subject Code</th>
              <th>Subject Name</th>
              <th>Internal</th>
              <th>External</th>
              <th>Pratical</th>
            </tr>
            <tr>
              
  <?php
   include 'Includes/Conn.php';
   $sql="select * from backlog where fullname='".$row['fullname']."' and seat='".$row['seat']."'";
     $bresult=$con->query($sql);
     $int;
     $ext;

     if($bresult->num_rows>0)
      {
         while($brow=$bresult->fetch_assoc())
           {
                      
            ?>
            <tr>
                <td><?php echo $brow['subcode']?></td>
                <td><?php echo $brow['subname']?></td>
                <td><?php echo $brow['inter']?></td>
                <td><?php echo $brow['exter']?></td>
                <td><?php echo $brow['pract']?></td>
              </tr>
            
            <?php

           }
       }
?>
</tr>
<tr>
    <td colspan="2" align="right">
     <b>Total Number of ATKT</b>
    </td>
    <td><b><?php  echo $irow['Internal']."<br>";?></b></td>
    <td><b><?php  echo $erow['External']."<br>";?></b></td>
    <td><b><?php  echo $prow['Pratical']."<br>";?></b></td>
  </tr>
  <tr>
    <td colspan="2" align="right">
     <b>Fees</b>
    </td>
    <td><b><?php   echo $totalinter."<br>";?></b></td>
    <td><b><?php    echo $totalexter."<br>";?></b></td>
    <td><b><?php    echo $totalpract."<br>";?></b></td>
  </tr>
  <tr>
     <td colspan="2" align="right">
     <b>Late Fees</b>
    </td>
    <td>&nbsp;</td>
    <td colspan="3" ><b><?php $lfees=$row['lfees'];
        if($lfees=="")
    {
        echo "0";
    }
    else
    {
        echo $lfees;
    }


    ?></b></td>
  </tr>
  <tr>
     <td colspan="2" align="right">
     <b>Change Of Center Fees</b>
    </td>
    <td>&nbsp;</td>
    <td colspan="3" ><b><?php $cfees= $row['cfees'];
    if($cfees=="")
    {
        echo "0";
    }
    else
    {
        echo $cfees;
    }


    ?></b></td>
  </tr>
   <tr>
    <td colspan="2" align="right"><b>Total Fees</b></td>
    <td colspan="3" align="center">
    <b><?php  echo $amu."<br>";?></b></td>
  </tr>
  <tr>
            <td colspan="5">
                 <?php
                 $textfield=$amu;
function convert_number_to_words($number) {
   
    $hyphen      = '-';
    $conjunction = '  ';
    $separator   = ' ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'Zero',
        1                   => 'One',
        2                   => 'Two',
        3                   => 'Three',
        4                   => 'Four',
        5                   => 'Five',
        6                   => 'Six',
        7                   => 'Seven',
        8                   => 'Eight',
        9                   => 'Nine',
        10                  => 'Ten',
        11                  => 'Eleven',
        12                  => 'Twelve',
        13                  => 'Thirteen',
        14                  => 'Fourteen',
        15                  => 'Fifteen',
        16                  => 'Sixteen',
        17                  => 'Seventeen',
        18                  => 'Eighteen',
        19                  => 'Nineteen',
        20                  => 'Twenty',
        30                  => 'Thirty',
        40                  => 'Fourty',
        50                  => 'Fifty',
        60                  => 'Sixty',
        70                  => 'Seventy',
        80                  => 'Eighty',
        90                  => 'Ninety',
        100                 => 'Hundred',
        1000                => 'Thousand',
        1000000             => 'Million',
        1000000000          => 'Billion',
        1000000000000       => 'Trillion',
        1000000000000000    => 'Quadrillion',
        1000000000000000000 => 'Quintillion'
    );
   
    if (!is_numeric($number)) {
        return false;
    }
   
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
   
    $string = $fraction = null;
   
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
   
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }
   
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
   
    return $string;
}

echo '<b>'.convert_number_to_words($textfield)."&nbsp;Only".'</b>';
?>



            </td>
        </tr>
        </table>
        
        <div>
        Receipt will be accepted only when DD/Cheque Cleared.<br/>
        Reg Office: Sir Elly Kadoorie & Jr. College, Mazgaon Mumbai: 400010
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    <div align="right">
           <img src="img/Sign.png" width="200" height="60" align="center"><img src="img/stamp.png" width="100" height="100" align="right"><br/>
			____________________________<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Authorised Signatory

			</div>
    </div>
    <div class="fter">
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>  

</body>
</html>
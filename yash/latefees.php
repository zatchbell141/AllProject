<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include 'Conn.php';
$id=$_GET['varname'];
$sql="select * from blacklog where id='".$id."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();

  $name=$row['name'];
$ssql="select * from studentdt where name='".$name."' ORDER BY id DESC";
$results=$con->query($ssql);
$rows=$results->fetch_assoc();
$prn=$rows['prn'];
$trn=$rows['trn'];
?>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    
    <title>Receipt</title>
    
        <link rel='stylesheet' type='text/css' href='css/Invloce.css' madia="screen"/>
        <!--<link rel='stylesheet' type='text/css' href='css/Invloce1.css' madia="print"/>-->
    <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='js/example.js'></script>

</head>

<body>
     <div align="center" id="hiderow" ><h1><input type ="submit"  value ="Print" onclick="window.print()" name="tsubmit"></h1></div>
        <div align="center" id="hiderow" ><a  href="receipt.php" >back to reciept</a><br/>
           
        </div>
    <div id="page-wrap">

            <h1 id="header">Receipt</h1>
        
        <div align="left">
        
            <br/>
              <img id="image" src="images/TMV81.jpg"  width="300" />
          
         
    
        </div>
        
        <div style="clear:both"></div>
        
        <div id="customer">

          
            <p style="font-size:120%;">
                <br/>
                 <?php
                
                
                if($prn=="0")
                {
                    echo "TRN:&nbsp".$trn."<br>";
                }
               else
                {
                    echo "PRN:&nbsp".$prn."<br>";
                }

                ?>
       
            Name:&nbsp;<?php echo $row['name'];?><br>
        
          
          
            Payment type:&nbsp;<?php echo $row['payment'];?><br>
            Seat No:&nbsp;<?php echo $row['seat'];?><br>
           
            <?php

            $cn=$row['chqueno'];
            $cd=$row['chqd'];

           
            $cb=$row['bank'];
                if($cn==0)
                {
                    echo "";
                }
                else
                {
                    echo "<p  style='font-size:120%;'>Cheque Number:$cn<br>";
                    echo "<p  style='font-size:120%;'>Cheque Date:$cd<br>";
                    echo "<p  style='font-size:120%;'>Bank:$cb</p><br> ";
                }

          ?>

            <table id="meta">
                <tr>
                    <td class="meta-head">Receipt:</td>
                    <td><div align="center"><b><?php echo $row['id'];?></b></div></td>
                </tr>
                <tr>

                    <td class="meta-head">Date:</td>
                    <td align="center"><div align="center"><b><?php echo $row['date'];?></b></div></td>
                </tr>
                <tr>
                    <td class="meta-head">Fees Amount:</td>
                    <td align="center"><div align="center"><b><?php echo $row['fees'];?></b></div></td>
                </tr>

            </table>
        
        </div>
        
        <table id="items">
        
         <tr>
             <th>Sr.No</th>
              <th>Subjects</th>
              <th>Amount</th>
              </tr>
                <tr>
                    <td  align="center">1</td>
                    <td><?php $myString=$row['subjects'];
                        echo "<pre>" . wordwrap( $myString, 30, "\n", true ) . "</pre>";


                    ?></td>
                    <td  align="center" ><b><?php echo $row['fees'];?></b></td>
                </tr>
                
                <tr>
                    <td align="center" >2</td>
                    <td>Others</td>
                    <td align="center"><b><?php echo $row['late'];?></td>
                </tr>
                
          <tr>

              
             <td colspan="2"class="blank"align="right">Total</td>
              <td colspan="2" class="total-line" ><div align="center"><b><?php echo $row['fees'];?></b></div></td>
              
          </tr>
          <tr>
              
              <td colspan="2"class="blank"align="right">Paid Fees</td>
              <td colspan="2" class="total-line" ><div align="center"><b><?php echo $row['paid'];?></b></div></td>
              
          </tr>
          <tr>
              
              <td colspan="2"class="blank"align="right"> Balance</td>
              <td colspan="2" class="total-line" ><div align="center"><b><?php echo $row['balance'];?></b></div></td>
             

          </tr>
        <tr>
            <td colspan="3">
                 <?php
                 $textfield=$row['paid'];
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